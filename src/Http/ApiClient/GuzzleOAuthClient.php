<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use Http\Client\HttpClient;
use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Token\AccessToken;
use Somoza\OAuth2Middleware\OAuth2Middleware;
use Somoza\OAuth2Middleware\TokenService\Bearer;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

/**
 * Class GuzzleOAuthClient
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
class GuzzleOAuthClient
{

    /** @var string  */
    protected $clientId;

    /** @var string  */
    protected $clientSecret;

    /** @var string  */
    protected $redirectUri;

    /** @var AccessToken  */
    protected $accessToken;

    /** @var \GuzzleHttp\Client  */
    protected $guzzleClient;

    /** @var HandlerStack  */
    protected $stack;

    /**
     * GuzzleOAuthClient constructor.
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     * @param string $accessToken
     */
    public function __construct($clientId = '', $clientSecret = '', $redirectUri = '', $accessToken = '')
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->accessToken = $accessToken;

        /** @var \GuzzleHttp\Client $client */
        $this->stack = new HandlerStack();
        $this->stack->setHandler(new CurlHandler());
        $this->guzzleClient = new \GuzzleHttp\Client(['handler' => $this->stack]);
    }

    /**
     * get Guzzle HttpClient with Oauth2 Middleware
     *
     * @return HttpClient
     */
    public function getHttpClient()
    {
        $provider = $this->getProvider();
        // attach our oauth2 middleware
        $bearerMiddleware = new OAuth2Middleware(
            new Bearer($provider, $this->accessToken), // use the Bearer token type
            [ // ignore (do not attempt to authorize) the following URLs
                $provider->getBaseAuthorizationUrl(),
                $provider->getBaseAccessTokenUrl([]),
            ]
        );
        $this->stack->push($bearerMiddleware);

        return new GuzzleAdapter($this->guzzleClient);
    }

    /**
     * @return GenericProvider
     */
    public function getProvider()
    {
        // instantiate a provider, see league/oauth2-client docs
        $provider = new GenericProvider(
            [
                'clientId' => $this->clientId,
                'clientSecret' => $this->clientSecret,
                'urlAuthorize' => ApiClient::URL_AUTHORIZE,
                'urlAccessToken' => ApiClient::URL_ACCESS_TOKEN,
                'urlResourceOwnerDetails' => ApiClient::URL_RESOURCE_OWNER_DETAILS,
                'redirectUri' => $this->redirectUri,
            ],
            ['httpClient' => $this->guzzleClient]
        );
        return $provider;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }

    /**
     * @return AccessToken
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param AccessToken $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return \GuzzleHttp\Client
     */
    public function getGuzzleClient()
    {
        return $this->guzzleClient;
    }

    /**
     * @param \GuzzleHttp\Client $guzzleClient
     */
    public function setGuzzleClient($guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * @return HandlerStack
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param HandlerStack $stack
     */
    public function setStack($stack)
    {
        $this->stack = $stack;
    }
}
