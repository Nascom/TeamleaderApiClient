<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use GuzzleHttp\Exception\ClientException;
use Http\Client\HttpClient;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Nascom\OAuth2\Client\Provider\Teamleader;
use Nascom\TeamleaderApiClient\Request\RequestInterface;

/**
 * Class ApiClient
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
class ApiClient implements ApiClientInterface
{
    /**
     * @var AbstractProvider
     */
    protected $provider;

    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var AccessToken
     */
    private $accessToken;

    /**
     * @var string
     */
    private $defaultMethod;

    /**
     * ApiClient constructor.
     *
     * @param AbstractProvider $provider
     * @param HttpClient $httpClient
     * @param AccessToken $accessToken
     * @param array $options
     *   An associative array of options. Supports the following values:
     *   - `default_method`: the default method to use when a requests supports
     *       multiple methods.
     */
    public function __construct(
        AbstractProvider $provider,
        HttpClient $httpClient,
        AccessToken $accessToken,
        array $options = []
    ) {
        $this->httpClient = $httpClient;
        $this->provider = $provider;
        $this->accessToken = $accessToken;
        $this->defaultMethod = isset($options['default_method'])
            ? $options['default_method']
            : 'GET';
    }

    /**
     * @inheritdoc
     */
    public function handle(RequestInterface $request)
    {
        dump($request);
        $options = [];
        $body = $request->getBody();
        if (!empty($body)) {
            $options['body'] = json_encode($body);
        }

        $psrRequest = $this->provider->getAuthenticatedRequest(
            $request->getMethod() ?: $this->defaultMethod,
            Teamleader::API_BASE_URL.$request->getEndpoint(),
            $this->accessToken,
            $options
        );

        return $this->httpClient->sendRequest($psrRequest);

    }
}
