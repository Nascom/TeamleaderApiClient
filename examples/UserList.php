<?php

$autoloadFile = __DIR__ . '/../vendor/autoload.php';
require_once $autoloadFile;


use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;

$clientId = '';
$clientSecret = '';
$redirectUri = '';
$teamleaderApiParameters = [];

$client = new ApiClient($clientId, $clientSecret, $redirectUri, $teamleaderApiParameters);
