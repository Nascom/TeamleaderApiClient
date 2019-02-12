<?php

namespace Nascom\TeamleaderApiClient\Http\Guzzle\Middleware;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\RequestInterface;

/**
 * Class RefreshTokenMiddleware
 *
 * @package Nascom\TeamleaderApiClient\Http\Guzzle\Middleware
 */
class RefreshTokenMiddleware
{
    /**
     * @var AbstractProvider
     */
    private $provider;

    /**
     * @var AccessToken
     */
    private $token;

    /**
     * @var callable
     */
    private $refreshTokenCallback;

    /**
     * AuthenticationMiddleware constructor.
     *
     * @param AbstractProvider $provider
     * @param AccessToken $token
     * @param callable $refreshTokenCallback
     */
    public function __construct(
        AbstractProvider $provider,
        AccessToken $token,
        callable $refreshTokenCallback = null
    ) {
        $this->provider = $provider;
        $this->token = $token;
        $this->refreshTokenCallback = $refreshTokenCallback;
    }

    /**
     * @param callable $handler
     * @return \Closure
     */
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            if ($this->token->hasExpired()) {
                $this->refreshToken();
            }

            return $handler($request, $options);
        };
    }

    /**
     * @throws \League\OAuth2\Client\Provider\Exception\IdentityProviderException
     */
    private function refreshToken()
    {
        $this->token = $this->provider->getAccessToken('refresh_token', [
            'refresh_token' => $this->token->getRefreshToken()
        ]);

        if ($this->refreshTokenCallback) {
            call_user_func($this->refreshTokenCallback, $this->token);
        }
    }

}
