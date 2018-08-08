<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Nascom\TeamleaderApiClient\Repository\ContactRepository;
use Nascom\TeamleaderApiClient\Request\RequestInterface;
use Nascom\TeamleaderApiClient\Response\Response;

/**
 * Class ApiClient
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
class ApiClient implements ApiClientInterface
{

    /** @var HttpClient */
    protected $httpClient;

    const URL_AUTHORIZE = 'https://app.teamleader.eu/oauth2/authorize';
    const URL_ACCESS_TOKEN = 'https://app.teamleader.eu/oauth2/access_token';
    const URL_RESOURCE_OWNER_DETAILS = 'https://api.teamleader.eu/users.me';
    const BASE_API_URL = 'https://api.teamleader.eu/';

    /**
     * ApiClient constructor.
     *
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     * @param $teamleaderApiParameters
     * @param array $defaultOptions
     */
    public function __construct
    (
        HttpClient $httpClient = null,
        array $teamleaderApiParameters = [],
        array $defaultOptions = []
    )
    {
        // Use discovery to find our client if present.
        if ($httpClient == null) {
            $httpClient = HttpClientDiscovery::find();
        }
        $this->httpClient = $httpClient;
    }

    /**
     * Returns the contactrepository.
     */
    public function getContactRepository()
    {
        return new ContactRepository($this);
    }

    public function gethttpMethodsClient() {
        return new HttpMethodsClient(
            $this->httpClient,
            MessageFactoryDiscovery::find()
        );
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @param HttpClient $httpClient
     */
    public function setHttpClient(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }
}
