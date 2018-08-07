<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;
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
          $accessToken = $this->provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
          ]);

          // We have an access token, which we may use in authenticated
          // requests against the service provider's API.
          echo 'Access Token: ' . $accessToken->getToken() . "<br>";
          echo 'Refresh Token: ' . $accessToken->getRefreshToken() . "<br>";
          echo 'Expired in: ' . $accessToken->getExpires() . "<br>";
          echo 'Already expired? ' . ($accessToken->hasExpired() ? 'expired' : 'not expired') . "<br>";

          // Using the access token, we may look up details about the
          // resource owner.
          $resourceOwner = $this->provider->getResourceOwner($accessToken);

          var_export($resourceOwner->toArray());

          // The provider provides a way to get an authenticated API request for
          // the service, using the access token; it returns an object conforming
          // to Psr\Http\Message\RequestInterface.
          $request = $this->provider->getAuthenticatedRequest(
            'GET',
            'https://api.teamleader.eu/contacts.list',
            $accessToken
          );

            $httpResponse = $this->provider->getResponse($request);
            $resp_body = $httpResponse->getBody();

            echo '<br /> <br /><br /><br /><br />';
            echo $resp_body->getContents();
            $tmp = '';

            echo '<br /><br /><br /><a href="https://94f8b6b3.ngrok.io/examples/UserList.php">Try again</a>';

        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {

          // Failed to get the access token or user details.
          exit($e->getMessage());

        }

      }
    }

    /**
     * @inheritdoc
     */
    public function handle(RequestInterface $request)
    {
        $response = $this->client->request(
            $request->getMethod(),
            $request->getUri(),
            $this->getOptions($request)
        );

        return new Response($response);
    }

    /**
     * @param RequestInterface $request
     * @return array
     */
    public function getOptions(RequestInterface $request)
    {
        return $this->mergeOptions($this->getDefaultOptions(), $request);
    }

    /**
     * Merges the default options with the request options.
     *
     * @param array $options
     * @param RequestInterface $request
     * @return array
     */
    protected function mergeOptions(array $options, RequestInterface $request)
    {
        $options['form_params']['api_group'] = $this->teamleaderApiParameters['api_group'];
        $options['form_params']['api_secret'] = $this->teamleaderApiParameters['api_secret'];

        if (!empty($request->getParameters())) {
            $options['query'] = array_merge(
                isset($options['query']) ? $options['query'] : [],
                $request->getParameters()
            );
        }

        if (!empty($request->getOptions())) {
            $options['form_params'] = array_merge(
                $options['form_params'],
                $request->getOptions()
            );
        }

        return $options;
    }

    /**
     * Combines some sensible default options with optional provided options.
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        return $this->defaultOptions;
    }

}
