<?php

namespace Nascom\TeamleaderApiClient\Request\Attributes;

/**
 * Class PageInfo
 *
 * @package Nascom\TeamleaderApiClient\Request\Attributes
 */
class PageInfo
{
    /**
     * @var array
     */
    private $attributes = [];

    /**
     * PageInfo constructor.
     *
     * @param null $size
     * @param null $pageNumber
     */
    public function __construct($size = null, $pageNumber = null)
    {
        if ($size) {
            $this->setPageSize($size);
        }
        if ($pageNumber) {
            $this->setPageNumber($pageNumber);
        }
    }

    /**
     * @param int $perPage
     */
    public function setPageSize($perPage)
    {
        $this->attributes['size'] = $perPage;
    }

    /**
     * @param int $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->attributes['number'] = $pageNumber;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->attributes;
    }
}
