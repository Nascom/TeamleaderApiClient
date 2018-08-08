<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;

abstract class RepositoryBase
{
    /** @var  ApiClient */
    protected $apiClient;

    public function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient() {
        return $this->apiClient;
    }

    public function getResponse($method, $url) {
        $response = $this->getApiClient()->gethttpMethodsClient()->send($method, ApiClient::BASE_API_URL . $url);
        return json_decode($response->getBody()->getContents());
    }
}
