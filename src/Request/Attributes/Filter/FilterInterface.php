<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Filter;

/**
 * Interface FilterInterface
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes\Filter
 */
interface FilterInterface
{
    /**
     * @return string
     */
    public function toArray();
}
