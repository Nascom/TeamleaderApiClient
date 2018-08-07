<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Request\RequestInterface;

abstract class RepositoryBase
{
    protected $client;

    public function __construct($apiClient)
    {
        $this->client = $apiClient;
    }

    public function getClient() {
        return $this->client;
    }

    protected function getRequest($method, $url) {
        return $this->client->request($method, $url);
    }

    protected function getResponseJson($request) {
        $response = $this->client->handle($request);

        return $response;
    }
}