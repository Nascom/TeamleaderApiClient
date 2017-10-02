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
It has to implement the `HttpClientInterface`. A client using Guzzle
is already available in the package. This requires installing
[guzzlehttp/guzzle](https://github.com/guzzle/guzzle).

```php
<?php

use Nascom\TeamleaderApiClient\Http\HttpClient\GuzzleHttpClient;

$guzzle = new \GuzzleHttp\Client(['base_uri' => 'https://www.teamleader.be/api/']);
$httpClient = new GuzzleHttpClient($guzzle);
```

You can use this HttpClient to instantiate the actual API client.
You'll have to provide your Teamleader API credentials as well.
```php
<?php

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;

$teamleaderParameters = [
    'api_group' => '12345',
    'api_secret' => 'XXXXXXXXXXXXXXX'
];

$client = new ApiClient(
    $httpClient, // A client implementing HttpClientInterface.
    $teamleaderParameters // An array containing the Teamleader credentials.
);
```

### Making requests
Every API endpoint has a corresponding Request class. These classes have to
be passed to the client's `handle()` method, which will return a Response object.
All available requests can be found [here](https://github.com/Nascom/TeamleaderApiClient/tree/master/src/Request).

For example, here is how you could fetch the details of a project:
```php
<?php

use Nascom\TeamleaderApiClient\Request\Project\RetrieveProjectRequest;

$projectRequest = new RetrieveProjectRequest(23);
$response = $client->handle($projectRequest);

echo $response->getData(); // Returns the Teamleader JSON response as a string.
```

## Advanced features
### Providing extra options
Extra options can be passed to the ApiClient. These will be merged with some
default options, and passed to the HttpClient on making a request.
```php
<?php

$client = new ApiClient(
    $httpClient,
    $teamleaderParameters,
    ['connect_timeout' => 5.0] // This will override the default timeout.
);
```

### Creating a custom HttpClient
You can create a custom HttpClient to handle requests. All it has to do is
implement the `HttpClientInterface`. You could, for example, implement a client
using curl.

```php
<?php

use Nascom\TeamleaderApiClient\Http\HttpClient\HttpClientInterface;

class CurlHttpClient implements HttpClientInterface
{
    public function request($method, $uri, array $options = [])
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.teamleader.be/api/' . $uri,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $options['form_params']
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}

$client = new ApiClient(
    new CurlHttpCLient(),
    $teamleaderParameters
);
```
