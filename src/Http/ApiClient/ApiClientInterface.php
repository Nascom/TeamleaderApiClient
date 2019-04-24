<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Request\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface ApiClientInterface
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
interface ApiClientInterface
{
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws \Http\Client\Exception
     */
    public function handle(RequestInterface $request);
}
