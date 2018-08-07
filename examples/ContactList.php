<?php

$autoloadFile = __DIR__ . '/../vendor/autoload.php';
require_once $autoloadFile;

use Nascom\TeamleaderApiClient\Repository\ContactRepository;



use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;

$clientId = '';
$clientSecret = '';
$redirectUri = '';
$teamleaderApiParameters = [];

//$contactRepository = new ContactRepository($clientID, $clientSecret, $RedirectUri, $teamleaderApiParameters = []);

$client = new ApiClient($clientId, $clientSecret, $redirectUri, $teamleaderApiParameters);
$contactrepository = $client->getContactRepository();
$contacts = $contactrepository->listContacts();

$tmp = '';


echo $contacts;

echo '<a href="https://94f8b6b3.ngrok.io/examples/ContactList.php">Try again</a>';

//$contactrepository = $client->getContactRepostiory();

//$contactrepository->listContacts();