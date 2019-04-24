<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Filter;

/**
 * Interface FilterInterface
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
interface FilterInterface
{
    /**
     * @param array $filers
     */
    public function setFilters(array $filers = []);

    /**
     * @return array
     */
    public function getFilters();
}
