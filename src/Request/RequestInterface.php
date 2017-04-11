<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Interface QueryInterface
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
     * @return array
     */
    public function getOptions();

    /**
     * @return string
     */
    public function getUri();

    /**
     * @return array
     */
    public function getParameters();
}
