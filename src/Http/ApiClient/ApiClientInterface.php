<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Repository\ContactRepository;
use Http\Client\HttpClient;

/**
 * Interface ApiClientInterface
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
interface ApiClientInterface
{
    /**
     * @return ContactRepository
     */
    public function getContactRepository();
    public function getHttpClient();
    public function setHttpClient(HttpClient $httpClient);
}
