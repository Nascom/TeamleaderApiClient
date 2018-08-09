<?php

require('vendor/autoload.php');
require('../vendor/autoload.php');
require('authorize.php');

use Nascom\TeamleaderApiClient\Attributes\ContactFilter;
use Nascom\TeamleaderApiClient\Attributes\Email;
use Nascom\TeamleaderApiClient\Attributes\Page;
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

// Create a filter to return contacts with a specific email.
$email = new Email();
$email->setEmail('nick.veenhof@dropsolid.com');
$email->setType('primary');

// Add our email to the filter.
$filter = new ContactFilter();
$filter->setEmail($email);

// Get the list of contacts.
$contacts = $contactRepository->listContacts($filter);
// Print the Telephone number for all contacts found and their country
foreach ($contacts as $contact) {
    $telephones = $contact->getTelephones();
    print $contact->getPrimaryAddress()->getCountry();
    foreach ($telephones as $telephone) {
        print $telephone->getNumber();
    }
}

// Get a list of 40 contacts from page 2.
$page = new Page();
$page->setSize('40');
$page->setNumber('2');

$contacts = $contactRepository->listContacts(null, $page);
//var_dump($contacts);
