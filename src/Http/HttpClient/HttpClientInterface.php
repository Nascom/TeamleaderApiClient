<?php

namespace Nascom\TeamleaderApiClient\Http\HttpClient;

/**
 * Interface HttpClientInterface
 *
 * @package Nascom\TeamleaderApiClient\Http\HttpClient
 */
interface HttpClientInterface
{
    /**
     * @param $method
     * @param $uri
     * @param array $options
     * @return string
     */
    public function request($method, $uri, array $options = []);
}
