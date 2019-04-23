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
    [ // Optional extra configuration.
        'timeout' => 3.0, 
        'callback' => function($newActionToken) {
            // Do stuff with the new token
            // ...
        }
    ] 
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

use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesAddRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesDeleteRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesInfoRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesListRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesUpdateRequest;

// Performing a companies.add request
$company = [
    'name' => 'TeamLeader',
    'emails' => [
        ['type' => 'primary', 'email' => 'sales@teamleader.eu'],
        ['type' => 'invoicing', 'email' => 'invoicing@teamleader.eu'],
    ],
    'language' => 'en',
    'website' => 'https://teamleader.eu/',
];
$request = new CompaniesAddRequest($company);
$response = $apiClient->handle($request);
$linkedCompany = json_decode($response->getBody()->getContents(), true);

// Performing a companies.info request
$request = new CompaniesInfoRequest($linkedCompany['data']['id']);
$response = $apiClient->handle($request);
$company = json_decode($response->getBody()->getContents(), true)['data'];

// Performing a companies.update request
$company['custom_fields'][0]['value'] = 'New Custom Value';
$request = new CompaniesUpdateRequest($company);
$apiClient->handle($request);

// Performing a companies.delete request
$request = new CompaniesDeleteRequest($linkedCompany['data']['id']);
$apiClient->handle($request);

// Performing a companies.list request
$request = new CompaniesListRequest();
$response = $apiClient->handle($request);
$companies = json_decode($response->getBody()->getContents());

// Performing a companies.list request with filters, pagination and sorting
$filters = [
    'email' => [
        'type' => 'primary',
        'email' => 'info@example.org',
    ],
];
$pagination = [
    'size' => 5,
    'number' => 1,
];
$sorting = [
    'name' => 'asc',
    'added_at' => 'desc',
];
$request = new CompaniesListRequest();
$request->setPage($pagination);
$request->setSort($sorting);
$response = $apiClient->handle($request);
$companies = json_decode($response->getBody()->getContents());
```

###  Using the repository classes

If you want to work with deserialized models, you can make use of the
`Teamleader` class. This acts as a wrapper for the API. You'll need
to install [Symfony's Serializer component][symfony-serializer]
(`symfony/serializer`) for this.


Instantiate teamleader as shown below to make use of the repositories
 
```php
$teamleader = \Nascom\TeamleaderApiClient\Teamleader::withDefaultSerializer($apiClient);
```

```php
<?php

use Nascom\TeamleaderApiClient\Model\Company\Company;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;

// Performing a companies.add request
$company = new Company();
$company->create('TeamLeader');
$emails = [
    new Email('sales@teamleader.eu', 'primary'),
    new Email('invoicing@teamleader.eu', 'invoicing'),
];
$company->setEmails($emails);
$company->setLanguage('en');
$company->setWebsite('https://teamleader.eu/');
$linkedCompany = $teamleader->companies()->addCompany($company);

// Performing a companies.info request
$company = $teamleader->companies()->getCompany($linkedCompany->getId());

// Performing a companies.update request
$customFields = $company->getCustomFields();
$customFields[0]->setValue('New custom value');
$company->setCustomFields($customFields);
$teamleader->companies()->updateCompany($company);

// Performing a companies.delete request
$teamleader->companies()->deleteCompany($linkedCompany->getId());

// Performing a companies.list request
$companies = $teamleader->companies()->listCompanies();

// Performing a companies.list request with filters, pagination and sorting
$filters = [
    'email' => [
        'type' => 'primary',
        'email' => 'info@example.org',
    ],
];
$pagination = [
    'size' => 5,
    'number' => 1,
];
$sorting = [
    'name' => 'asc',
    'added_at' => 'desc',
];
$companies = $teamleader->companies()->listCompanies($filters, $pagination, $sorting);
```

###  Known issues
The `timeTracking.info` request results in a `'400 Bad Request' response: {"errors":[{"code":0,"title":"Key id must be present","status":400,"meta":{"field":"id"}}]}`

[teamleader-docs]: https://developer.teamleader.eu
[php-http-homepage]: http://docs.php-http.org/en/latest/
[league-oauth-homepage]: http://oauth2-client.thephpleague.com/
[teamleader-provider]: https://github.com/Nascom/oauth2-teamleader
[league-usage]: http://oauth2-client.thephpleague.com/usage/
[guzzle-homepage]: https://github.com/guzzle/guzzle
[symfony-serializer]: https://symfony.com/doc/current/components/serializer.html
[request-list]: https://github.com/Nascom/TeamleaderApiClient/tree/v2-refactor/src/Request
