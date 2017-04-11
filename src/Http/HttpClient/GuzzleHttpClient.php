<?php

namespace Nascom\TeamleaderApiClient\Http\HttpClient;

use GuzzleHttp\ClientInterface;

/**
 * Class GuzzleHttpClient
 *
 * @package Nascom\TeamleaderApiClient\Http\HttpClient
 */
class GuzzleHttpClient implements HttpClientInterface
{
    /**
     * @var ClientInterface
     */
    private $guzzleClient;

    /**
     * GuzzleHttpClient constructor.
     *
     * @param ClientInterface $guzzleClient
     */
    public function __construct(ClientInterface $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    /**
     * @inheritdoc
     */
    public function request($method, $uri, array $options = [])
    {
        return $this->guzzleClient->request($method, $uri, $options)->getBody()->getContents();
    }
}
