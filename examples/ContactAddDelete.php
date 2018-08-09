<?php

require('vendor/autoload.php');
require('../vendor/autoload.php');
require('authorize.php');

use Nascom\TeamleaderApiClient\Entity\Contact;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;

///////////////////////////////////////
// Initialize for a connection.  //////
///////////////////////////////////////

// Do not do this in production, purely to make the examples readable.
$httpClient = authorize();
// Get the TeamleaderClient
$tlClient = new ApiClient($httpClient);

//////////////////////////////////////////////////////////
// Actual code example starts here for ContactList. //////
//////////////////////////////////////////////////////////

// Get the Teamleader Contact Repository
$contactRepository = $tlClient->getContactRepository();

// Create a contact.
$contact_variables = [
    'first_name' => 'John',
    'last_name' => 'Smith',
    'emails' => [
        [
            'type' => 'primary',
            'email' => 'info@piedpiper.eu',
        ]
    ],
    'salutation' => 'Mr.',
    'telephones' => [
        [
            'type' => 'phone',
            'number' => '092980615',
        ],
    ],
    'website' => 'http://example.com',
    'addresses' => [
        [
            'type' => 'invoicing',
            'address' => [
                'addressee' => 'Teamleader HQ',
                'line_1' => 'Dok Noord 3A 101',
                'postal_code' => '9000',
                'city' => 'Ghent',
                'country' => 'BE',
            ]
        ],
    ],
    'language' => 'en',
    'gender' => 'male',
    'birthdate' => '1978-11-19',
    'iban' => 'BE12123412341234',
    'bic' => 'BICBANK',
    'remarks' => 'Met at expo',
    'marketing_mails_consent' => false,
    'tags' =>[
        'prospect',
        'expo',
    ],
//    'custom_fields' => [
//        [
//            'id' => 'custom_field_150279',
//            'value' => 'http://example.com',
//        ]
//    ],
];
// @TODO fields: custom fields implementation.
$contact = new Contact($contact_variables);
$contact = $contactRepository->addContact($contact);
var_dump($contact);

// Delete a contact (the newly created one).
$result = $contactRepository->deleteContact($contact->getId());
var_dump($result);
