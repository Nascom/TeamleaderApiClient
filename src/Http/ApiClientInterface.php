<?php

namespace Nascom\TeamleaderApiClient\Http;

use Nascom\TeamleaderApiClient\Request\RequestInterface;

/**
 * Interface ApiClientInterface
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
interface ApiClientInterface
{
    /**
     * Returns the response's body, or an array containing possible errors.
     *
     * @param RequestInterface $query
     * @return array|string
     */
    public function handle(RequestInterface $query);
}
