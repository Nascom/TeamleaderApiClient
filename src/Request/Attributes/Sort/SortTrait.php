<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Sort;

/**
 * Trait SortTrait
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes\Sort
 */
trait SortTrait
{
    /**
     * @var array
     */
    protected $sort;

    /**
     * @param array $sort
     */
    public function setSort(array $sort = [])
    {
        $this->sort = $sort;
    }

    /**
     * @return array
     */
    public function getSort()
    {
        return $this->sort;
    }

}
