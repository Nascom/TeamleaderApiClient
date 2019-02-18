<?php

require "../vendor/autoload.php";
require "../src/authorize.php";

use Nascom\OAuth2\Client\Provider\Teamleader;
use Nascom\TeamleaderApiClient\Http\Guzzle\GuzzleApiClientFactory;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesAddRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesDeleteRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesInfoRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesListRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Companies\CompaniesUpdateRequest;

session_start();

$provider = new Teamleader(
    [
        'clientId' => 'your-client-id',
        'clientSecret' => 'your-client-secret',
        'redirectUri' => 'http://example.com/your/redirect/uri',
    ]
);

$accessToken = authorize($provider);

$apiClient = GuzzleApiClientFactory::create(
    $provider,
    $accessToken,
    ['timeout' => 3.0]
);

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
