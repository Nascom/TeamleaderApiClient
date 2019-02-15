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
    ['timeout' => 20.0]
);

$teamleader = Nascom\TeamleaderApiClient\Teamleader::withDefaultSerializer($apiClient);

// First of all we create a new 'Company'
// The required fields can be set by using the 'Create' method
// All other optional fields
$company = new Company();
$company->create('TeamLeader');
$emails = [
    new Email('sales@teamleader.eu', 'primary'),
    new Email('invoicing@teamleader.eu', 'invoicing'),
];
$company->setEmails($emails);
$company->setLanguage('en');
$company->setWebsite('https://teamleader.eu/');
// Next, we add the new company
// This will result in a response containing the newly created company's id and type (in this case 'company')
$linkedCompany = $teamleader->companies()->addCompany($company);

// With this created 'Company' we can use the id to get the 'Company' form teamleader
$company = $teamleader->companies()->getCompany($linkedCompany->getId());

// Next, we update some fields in the 'Company' by using the corresponding setters
$customFields = $company->getCustomFields();
$customFields[0]->setValue('New custom value');
$company->setCustomFields($customFields);
// To update the 'Company' the companies.update request is executed by passing the updated company in the repository
$teamleader->companies()->updateCompany($company);

// We can use the id of a 'Company' to delete it
$teamleader->companies()->deleteCompany($linkedCompany->getId());

// Perform a companies.list request
$companies = $teamleader->companies()->listCompanies();

// Optionally filters, page info and sorting can be passed as arguments when applicable.
// Visit the Teamleader API documentation for compatible filters and sorting
// https://developer.teamleader.eu/
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
$companies = $teamleader->companies()->listCompanies(
    $filters,
    $pagination,
    $sorting
);
