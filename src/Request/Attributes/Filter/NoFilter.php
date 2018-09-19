<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes\Filter;

/**
 * Class NoFilter
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes\Filter
 */
class NoFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return [];
    }
}
