<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Http\Discovery\StreamFactoryDiscovery;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Request\AbstractRequest;
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

        // Get the actual Request as understood by the given httpClient.
        $httpRequest = $request->getRequest();

        // Find out if we need to ship it with any payload and set it.
        $reqBody = $request->getRequestBody();
        if ($reqBody !== null) {
            $requestBodyStream = StreamFactoryDiscovery::find()->createStream(json_encode($request->getRequestBody()));
            // Must return a new object according to the documentation.
            $httpRequest = $httpRequest->withBody($requestBodyStream);
        }

        // Execute and get the response.
        return $this->getApiClient()->gethttpClient()->sendRequest($httpRequest);
    }

    public function getResponseBody(ResponseInterface $response) {
        return json_decode($response->getBody()->getContents(), true);
    }
}
