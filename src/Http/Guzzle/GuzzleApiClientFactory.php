<?php

namespace Nascom\TeamleaderApiClient\Http\Guzzle;

use GuzzleHttp\HandlerStack;
use Http\Adapter\Guzzle6\Client;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Http\Guzzle\Middleware\RefreshTokenMiddleware;
use GuzzleHttp\Client as GuzzleHttpClient;

/**
 * Class GuzzleApiClientFactory
 *
 * @package Nascom\TeamleaderApiClient\Http\Guzzle
 */
class GuzzleApiClientFactory
{

    /**
     * @param AbstractProvider $provider
     * @param AccessToken|array $accessToken
     * @param array $config
     * @return ApiClient
     */
    public static function create(
        AbstractProvider $provider,
        AccessToken $accessToken,
        array $config = []
    ) {
        if (!isset($config['handler'])) {
            $handler = self::initialiseHandlerStack($provider, $accessToken);
            $config['handler'] = $handler;
        }

        $httpClient = new GuzzleHttpClient($config);
        $psrClient = new Client($httpClient);

        return new ApiClient($provider, $psrClient, $accessToken);
    }

    /**
     * @param AbstractProvider $provider
     * @param AccessToken $accessToken
     * @return HandlerStack
     */
    protected static function initialiseHandlerStack(
        AbstractProvider $provider,
        AccessToken $accessToken
    ) {
        $handlerStack = HandlerStack::create();
        $refreshMiddleware = new RefreshTokenMiddleware(
            $provider,
            $accessToken
        );
        $handlerStack->push($refreshMiddleware);

        return $handlerStack;
    }
}
