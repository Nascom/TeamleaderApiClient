<?php

require('vendor/autoload.php');
require('../vendor/autoload.php');

use Nascom\TeamleaderApiClient\Attributes\ContactFilter;
use Nascom\TeamleaderApiClient\Attributes\Email;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Http\ApiClient\GuzzleOAuthClient;

///////////////////////////////////////
// Initialize for a connection.  //////
///////////////////////////////////////

$clientId = '';
$clientSecret = '';
$redirectUri = 'http://6514aaba.ngrok.io/ContactList.php';

$guzzleOAuthClient = new GuzzleOAuthClient($clientId, $clientSecret, $redirectUri);

// If we don't have an authorization code then get one
// Ideally this all happens in another layer of your application.
if (!isset($_GET['code'])) {
    // Fetch the authorization URL from the provider; this returns the urlAuthorize option and generates and applies any
    // necessary parameters (e.g. state).
    $authorizationUrl = $guzzleOAuthClient->getProvider()->getAuthorizationUrl();
    // Get the state generated for you and store it to the session.
    $_SESSION['oauth2state'] = $guzzleOAuthClient->getProvider()->getState();
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
        $accessToken = $guzzleOAuthClient->getProvider()->getAccessToken('authorization_code', ['code' => $_GET['code']]);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        // Failed to get the access token or user details.
        exit($e->getMessage());
    }
}

// Set our Access token to the Guzzle OAuth Client
$guzzleOAuthClient->setAccessToken($accessToken);

// Get the HttpClient
$httpClient = $guzzleOAuthClient->getHttpClient();

// Get the TeamleaderClient
$tlClient = new ApiClient($httpClient);

//////////////////////////////////////////////////////////
// Actual code example starts here for ContactList. //////
//////////////////////////////////////////////////////////

// Get the Teamleader Contact Repository
$contactRepository = $tlClient->getContactRepository();

// Create a filter to return contacts with a specific email.
$email = new Email();
$email->setEmail('nick.veenhof@dropsolid.com');
$email->setType('primary');

// Add our email to the filter.
$filter = new ContactFilter();
$filter->setEmail($email);

// Get the list of contacts.
$contacts = $contactRepository->listContacts($filter);

// Print all contact objects
var_dump($contacts);

