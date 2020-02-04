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
    const EXPIRES_AT_DELTA = 60 * 5;

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

    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            if ($this->isExpired($this->token)) {
                $this->refreshToken();
                $request = $request->withHeader('Authorization', 'Bearer '.$this->token->getToken());
            }

            return $handler($request, $options);
        };
    }

    /**
     * @throws \League\OAuth2\Client\Provider\Exception\IdentityProviderException
     */
    private function refreshToken()
    {
        $this->token = $this->provider->getAccessToken(
            'refresh_token',
            [
                'refresh_token' => $this->token->getRefreshToken(),
            ]
        );

        if ($this->refreshTokenCallback) {
            call_user_func($this->refreshTokenCallback, $this->token);
        }
    }

    /**
     * It is possible that the API's time and our time is not completely in
     * sync, or that there is a bit of latency. If we send the request a few
     * moments before the expiry, this could cause our request to be denied
     * with a "401: Access token expired".
     *
     * Because of this reason, we'll treat the token as expired a bit before
     * it actually expires (currently 5 minutes).
     *
     * @see https://github.com/Nascom/TeamleaderApiClient/issues/16
     *
     * @param AccessToken $token
     * @return bool
     */
    private function isExpired(AccessToken $token): bool
    {
        $expiresAt = $token->getExpires() - self::EXPIRES_AT_DELTA;

        return $expiresAt < time();
    }
}
