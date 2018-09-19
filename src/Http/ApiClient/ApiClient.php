<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

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
     * ApiClient constructor.
     *
     * @param AbstractProvider $provider
     * @param HttpClient $httpClient
     * @param AccessToken $accessToken
     */
    public function __construct(
        AbstractProvider $provider,
        HttpClient $httpClient,
        AccessToken $accessToken
    ) {
        $this->httpClient = $httpClient;
        $this->provider = $provider;
        $this->accessToken = $accessToken;
    }

    /**
     * @inheritdoc
     */
    public function handle(RequestInterface $request)
    {
        $psrRequest = $this->provider->getAuthenticatedRequest(
            $request->getMethod(),
            Teamleader::API_BASE_URL . $request->getEndpoint(),
            $this->accessToken,
            $request->getOptions()
        );

        return $this->httpClient->sendRequest($psrRequest);
    }
}
