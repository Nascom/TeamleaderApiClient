# TeamleaderApiClient
PHP client to connect to the [Teamleader API](http://apidocs.teamleader.be/index.php).

## Installation
The package is available via composer:

```Bash
$ composer require nascom/teamleader-api-client
```

## Basic usage
### Setup
First, you'll need to provide a client that can make HTTP requests.
It has to implement the `HttpClientInterface`. A helper class that generates a client using Guzzle
is already available in the package. This requires installing
[guzzlehttp/guzzle](https://github.com/guzzle/guzzle).

```php
<?php

use Nascom\TeamleaderApiClient\Http\ApiClient\GuzzleOAuthHelper;

$clientId = 'my-client-id';
$clientSecret = 'my-client-secret';
$redirectUri = 'http://my-uri-that-stores-access-token-and-knows-where-to-go';

// Initialize our OAuth Client.
// Make sure your Redirect URI is able to store the Access Token in a secure
// way. We assume it is available in $accessToken variable here.
// You'll have to provide your Teamleader API credentials as well.
$guzzleOAuthHelper = new GuzzleOAuthHelper($clientId, $clientSecret, $redirectUri);
// Set the Access token after OAuth returned
// See examples/authorize.php how to make this work.
$guzzleOAuthHelper->setAccessToken($accessToken);
// Get the HttpClient
$httpClient = $guzzleOAuthHelper->getHttpClient();
```

You can use this HttpClient to instantiate the actual API client.

```php
<?php

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;

// Get the TeamleaderClient
$tlClient = new ApiClient($httpClient);
```

### Making requests
Every API endpoint has a corresponding Repository class. They can also be used
as separate requests.
All available requests can be found [here](https://github.com/Nascom/TeamleaderApiClient/tree/master/src/Request).
All available managers can be found [here](https://github.com/Nascom/TeamleaderApiClient/tree/master/src/Repository)
For example, here is how you could fetch the details of a contact:
```php
<?php

// Get the Teamleader Contact Repository
$contactRepository = $tlClient->getContactRepository();
// Get a single contact.
$contact = $contactRepository->getContact('6267fb2c-9298-06a5-b266-dd7a9b82d800');
```

## Advanced features
### Providing extra options
Since we are compatible with any httpClient, as it is compatible with the psr7
standards, you can adjust the httpClient before creating any request to add or
remove any parameters. See the Guzzle library for details.