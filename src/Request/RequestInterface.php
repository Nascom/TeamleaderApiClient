<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Interface RequestInterface
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
interface RequestInterface
{
    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getEndpoint();

    /**
     * @return array
     */
    public function getOptions();
}
