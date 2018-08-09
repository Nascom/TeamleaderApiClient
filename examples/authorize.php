<?php

use Nascom\TeamleaderApiClient\Http\ApiClient\GuzzleOAuthHelper;

function authorize() {
    // Rename default.credentials.json to credentials.json and fill it in with
    // your API keys.
    $credentials = json_decode(file_get_contents('credentials.json'));
    // Initialize our OAuth Client.
    $guzzleOAuthHelper = new GuzzleOAuthHelper($credentials->clientId, $credentials->clientSecret, getCurrentUri());
    // Initialize the accessToken.
    $accessToken = null;

    // If we don't have an authorization code then get one
    // Ideally this all happens in another layer of your application.
    if (!isset($_GET['code'])) {
        // Fetch the authorization URL from the provider; this returns the
        // urlAuthorize option and generates and applies any
        // necessary parameters (e.g. state).
        $authorizationUrl = $guzzleOAuthHelper->getProvider()->getAuthorizationUrl();
        // Get the state generated for you and store it to the session.
        $_SESSION['oauth2state'] = $guzzleOAuthHelper->getProvider()->getState();
        // Redirect the user to the authorization URL.
        header('Location: ' . $authorizationUrl);
        exit;
        // Check given state against previously stored one to mitigate CSRF attack
    } elseif (empty($_GET['state']) || (isset($_SESSION['oauth2state']) && $_GET['state'] !== $_SESSION['oauth2state'])) {
        if (isset($_SESSION['oauth2state'])) {
            unset($_SESSION['oauth2state']);
        }
        exit('Invalid state');
    } else {
        try {
            // Try to get an access token using the authorization code grant.
            $accessToken = $guzzleOAuthHelper->getProvider()->getAccessToken('authorization_code', ['code' => $_GET['code']]);
        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
            // Failed to get the access token or user details.
            exit($e->getMessage());
        }
    }
    // Set our Access token to the Guzzle OAuth Client
    $guzzleOAuthHelper->setAccessToken($accessToken);
    // Get the HttpClient
    return $guzzleOAuthHelper->getHttpClient();
}


function getCurrentUri() {
    // Get our current redirect link.
    if (!empty($_SERVER['HTTP_X_ORIGINAL_HOST'])) {
        $host = $_SERVER['HTTP_X_ORIGINAL_HOST'];
    }
    else {
        $host = $_SERVER['HTTP_HOST'];
    }
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $host . $_SERVER['PHP_SELF'];
}
