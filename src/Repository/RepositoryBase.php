<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Request\AbstractRequest;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

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

    public function sendRequest(AbstractRequest $request) {
        return $this->getApiClient()->gethttpClient()->sendRequest($request->getRequest());
    }

    public function getResponseBody(ResponseInterface $response) {
        return json_decode($response->getBody()->getContents());
    }
}
