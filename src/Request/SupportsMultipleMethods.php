<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Interface SupportsMultipleMethods
 *
 * Used to indicate requests that support multiple methods.
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
interface SupportsMultipleMethods
{
    /**
     * @param string $method
     * @return void
     */
    public function setMethod($method);
}
