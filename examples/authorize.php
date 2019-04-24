<?php

use League\OAuth2\Client\Provider\AbstractProvider;

require_once 'vendor/autoload.php';

/**
 * @param AbstractProvider $provider
 * @return mixed
 * @throws \League\OAuth2\Client\Provider\Exception\IdentityProviderException
 */
function authorize(AbstractProvider $provider)
{
    if (isset($_SESSION['token'])) {
        $accessToken = $_SESSION['token'];

        if ($accessToken instanceof \League\OAuth2\Client\Token\AccessToken) {
            if (!$accessToken->hasExpired()) {
                return $accessToken;
            }
        }
    }

    if (!isset($_GET['code'])) {
        $authorizationUrl = $provider->getAuthorizationUrl();
        $_SESSION['oauth2state'] = $provider->getState();
        header('Location: '.$authorizationUrl);
        exit;
    } elseif (empty($_GET['state']) || (isset($_SESSION['oauth2state']) && $_GET['state'] !== $_SESSION['oauth2state'])) {
        if (isset($_SESSION['oauth2state'])) {
            unset($_SESSION['oauth2state']);
        }
        exit('Invalid state');
    } else {
        $accessToken = $provider->getAccessToken(
            'authorization_code',
            ['code' => $_GET['code']]
        );
        $_SESSION['token'] = $accessToken;

        return $accessToken;
    }
}
