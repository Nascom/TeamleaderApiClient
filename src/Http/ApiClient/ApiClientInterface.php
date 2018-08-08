<?php

namespace Nascom\TeamleaderApiClient\Http\ApiClient;

use Nascom\TeamleaderApiClient\Response\Response;

/**
 * Interface ApiClientInterface
 *
 * @package Nascom\TeamleaderApiClient\Http
 */
interface ApiClientInterface
{
    /**
     * @return Response
     */
    public function getContactRepository();
}
