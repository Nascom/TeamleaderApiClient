<?php

namespace Nascom\TeamleaderApiClient\Http;

use Nascom\TeamleaderApiClient\Request\RequestInterface;
use Nascom\TeamleaderApiClient\Response\Response;

/**
 * Interface ApiClientInterface
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
interface ApiClientInterface
{
    /**
     * @param RequestInterface $query
     * @return Response
     */
    public function handle(RequestInterface $query);
}
