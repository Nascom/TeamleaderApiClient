<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Filter;

/**
 * Trait FilterTrait
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes\Filter
 */
trait FilterTrait
{
    /**
     * @var array
     */
    protected $filters;

    /**
     * @param array $filters
     */
    public function setFilters(array $filters = [])
    {
        $this->filters = $filters;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }
}
