# TeamleaderApiClient
PHP client to connect to the [Teamleader API][teamleader-docs].

## Installation
The package is available via composer:

```Bash
$ composer require nascom/teamleader-api-client
```

## Basic usage

### Dependencies

This package requires an HTTP client supported by [PHP-HTTP][php-http-homepage].
A default implementation has been provided if you use [Guzzle][guzzle-homepage]
(`guzzlehttp/guzzle`).

### Authentication

The Teamleader API uses OAuth2.0 to authenticate requests. We rely on [The PHP
league's OAuth2 client][league-oauth-homepage], with the third-party
[Teamleader provider][teamleader-provider] to handle this.

```php
<?php

use Nascom\OAuth2\Client\Provider\Teamleader;

$provider = new Teamleader([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
    'redirectUri' => 'http://example.com/your/redirect/uri'
]);
```

You can use this provider to fetch an access token. See the
[League documentation][league-usage] for an example.

### Setting up the client

The access token retrieved from the previous step is required to instantiate
the API client. You'll need an HTTP client as well. If you use guzzle, a
default factory has been provided.

```php
<?php

use Nascom\TeamleaderApiClient\Http\Guzzle\GuzzleApiClientFactory;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;

// Instantiate the client using the default Guzzle implementation.
$apiClient = GuzzleApiClientFactory::create(
    $provider,
    $accessToken,
    ['timeout' => 3.0] // Optional extra configuration.
);

// Alternatively, you can use any other PHP-HTTP compatible client of your
// choosing to instantiate the API client.
$apiClient = new ApiClient(
    $provider,
    $yourAlternativeHttpClient,
    $accessToken
);
```

### Making requests

Once you have the API client set up, you can start making requests. This is done
by passing a `Request` object to the client's `handle` method. A PSR-7
`ResponseInterface` will be returned.

All available requests can be found [here][request-list].

```php
<?php

use Nascom\TeamleaderApiClient\Request\General\Users\UsersMeRequest;

$request = new UsersMeRequest();
$response = $apiClient->handle($request);
$userArray = json_decode($response->getBody()->getContents());
```

###  Using the repository classes

If you want to work with deserialized models, you can make use of the
`Teamleader` class. This acts as a wrapper for the API. You'll need
to install [Symfony's Serializer component][symfony-serializer]
(`symfony/serializer`) for this.

```php
<?php

use Nascom\TeamleaderApiClient\Teamleader;

// Instantiate using the default serializer setup.
$teamleader = Teamleader::withDefaultSerializer($apiClient);

// Perform a users.me request
$user = $teamleader->users()->me();
echo get_class($user); // => 'Nascom\TeamleaderApiClient\Model\User'
echo $user->getAccount()->getType(); // => 'account'
```

[teamleader-docs]: https://developer.teamleader.eu
[php-http-homepage]: http://docs.php-http.org/en/latest/
[league-oauth-homepage]: http://oauth2-client.thephpleague.com/
[teamleader-provider]: https://github.com/Nascom/oauth2-teamleader
[league-usage]: http://oauth2-client.thephpleague.com/usage/
[guzzle-homepage]: https://github.com/guzzle/guzzle
[symfony-serializer]: https://symfony.com/doc/current/components/serializer.html
[request-list]: https://github.com/Nascom/TeamleaderApiClient/tree/v2/src/Request
