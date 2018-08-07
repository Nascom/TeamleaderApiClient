<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;
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

  protected $clientId;
  protected $clientSecret;
  protected $provider;
  protected $accessToken;

    /**
     * @var array
     */
    protected $teamleaderApiParameters;

    /**
     * @var array
     */
    protected $defaultOptions = [
        'connect_timeout' => 3.0,
        'headers' => [
            'Accept' => 'application/json',
        ]
    ];


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
        string $clientId,
        string $clientSecret,
        string $redirectUri,
        $teamleaderApiParameters,
        array $defaultOptions = []
    )
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->provider = new \League\OAuth2\Client\Provider\GenericProvider([
          'clientId'                => $this->clientId,    // The client ID assigned to you by the provider
          'clientSecret'            => $this->clientSecret,   // The client password assigned to you by the provider
          'redirectUri'             => $this->redirectUri,
          'urlAuthorize'            => 'https://app.teamleader.eu/oauth2/authorize',
          'urlAccessToken'          => 'https://app.teamleader.eu/oauth2/access_token',
          'urlResourceOwnerDetails' => 'https://api.teamleader.eu/users.me'
        ]);
        $this->teamleaderApiParameters = $teamleaderApiParameters;
        $this->defaultOptions = array_merge($this->defaultOptions, $defaultOptions);


      // If we don't have an authorization code then get one
      if (!isset($_GET['code'])) {

        // Fetch the authorization URL from the provider; this returns the
        // urlAuthorize option and generates and applies any necessary parameters
        // (e.g. state).
        $authorizationUrl = $this->provider->getAuthorizationUrl();

        // Get the state generated for you and store it to the session.
        $_SESSION['oauth2state'] = $this->provider->getState();

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
          $this->accessToken = $this->provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
          ]);

          // We have an access token, which we may use in authenticated
          // requests against the service provider's API.
//          echo 'Access Token: ' . $this->accessToken->getToken() . "<br>";
//          echo 'Refresh Token: ' . $this->accessToken->getRefreshToken() . "<br>";
//          echo 'Expired in: ' . $this->accessToken->getExpires() . "<br>";
//          echo 'Already expired? ' . ($this->accessToken->hasExpired() ? 'expired' : 'not expired') . "<br>";






        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {

          // Failed to get the access token or user details.
          exit($e->getMessage());

        }

      }
    }


    /**
     * Checks if the access token has expired.
     *
     * @return string
     */
    public function hasAccessTokenExpired() {
        return $this->accessToken->hasExpired() ? 'expired' : 'not expired';
    }

    /**
     * Gets the owner of the resource.
     */
    public function getResourceOwner() {
        $resourceOwner = $this->provider->getResourceOwner($this->accessToken);
        return $resourceOwnerr->toArray();
    }

    /**
     * Perform authenticted request on the given url.
     */
    public function request($method, $url) {
        $request = $this->provider->getAuthenticatedRequest(
          $method,
          'https://api.teamleader.eu/' . $url,
          $this->accessToken
        );
        return $request;
    }

    /**
     * @inheritdoc
     */
    public function handle($request)
    {
        $httpResponse = $this->provider->getResponse($request);
        $resp_body = $httpResponse->getBody();
        return $resp_body->getContents();
    }

    /**
     * Returns the contactrepository.
     */
    public function getContactRepository() {
        return new ContactRepository($this);
    }


}
