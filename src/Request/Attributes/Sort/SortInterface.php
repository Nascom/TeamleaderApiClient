<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Sort;

/**
 * Interface SortInterface
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes\Sort
 */
interface SortInterface
{
    /**
     * @param array $sort
     */
    public function setSort(array $sort = []);

    /**
     * @return array
     */
    public function getSort();
}
