<?php

require('vendor/autoload.php');
require('../vendor/autoload.php');
require('authorize.php');

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

// Get a single contact.
$contact = $contactRepository->getContact('6267fb2c-9298-06a5-b266-dd7a9b82d800');
var_dump($contact);
