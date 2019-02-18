<?php

require "../vendor/autoload.php";
require "../src/authorize.php";

use Nascom\OAuth2\Client\Provider\Teamleader;
use Nascom\TeamleaderApiClient\Http\Guzzle\GuzzleApiClientFactory;
use Nascom\TeamleaderApiClient\Model\Company\Company;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;

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

$teamleader = Nascom\TeamleaderApiClient\Teamleader::withDefaultSerializer($apiClient);

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
