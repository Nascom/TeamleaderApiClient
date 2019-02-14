<?php

namespace Nascom\TeamleaderApiClient\Request;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\NoFilter;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\PageInfo;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\SortInfo;

/**
 * Class BaseListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class BaseListRequest extends BaseRequest implements
    FilterInterface, PageInterface, SortInterface
{
    /**
     * @var array[]
     */
    private $filters;

    /**
     * @var array[]
     */
    private $page;

    /**
     * @var array[]
     */
    private $sort;

    /**
     * @param array[] $filers
     */
    public function setFilters(array $filers = [])
    {
        $this->filters = $filers;
    }

    /**
     * @return array[]
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @return array[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param array[] $page
     */
    public function setPage(array $page = [])
    {
        $this->page = $page;
    }

    /**
     * @return array[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param array[] $sort
     */
    public function setSort(array $sort = [])
    {
        $this->sort = $sort;
    }
}
