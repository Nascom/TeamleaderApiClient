<?php

namespace Nascom\TeamleaderApiClient\Request;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\NoFilter;
use Nascom\TeamleaderApiClient\Request\Attributes\PageInfo;
use Nascom\TeamleaderApiClient\Request\Attributes\SortInfo;

/**
 * Class BaseListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class BaseListRequest extends BaseRequest implements
    SupportsMultipleMethods
{
    use MultipleMethodsTrait;

    /**
     * @var FilterInterface
     */
    protected $filter;

    /**
     * @var PageInfo
     */
    protected $pageInfo;

    /**
     * @var SortInfo
     */
    protected $sortInfo;

    /**
     * BaseListRequest constructor.
     *
     * @param FilterInterface|null $filter
     * @param PageInfo|null $pageInfo
     * @param SortInfo|null $sortInfo
     */
    public function __construct(
        FilterInterface $filter = null,
        PageInfo $pageInfo = null,
        SortInfo $sortInfo = null
    ) {
        $this->filter = $filter ?: new NoFilter();
        $this->pageInfo = $pageInfo ?: new PageInfo();
        $this->sortInfo = $sortInfo ?: new SortInfo();
    }

    /**
     * @return PageInfo
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @return SortInfo
     */
    public function getSortInfo()
    {
        return $this->sortInfo;
    }

    /**
     * @return FilterInterface
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        if ($this->filter !== null) {
            $this->body['filter'] = $this->filter->toArray();
        }
        $pageInfo = $this->pageInfo->toArray();
        if (!empty($pageInfo)) {
            $this->body['page'] = $pageInfo;
        }
        $sortInfo = $this->sortInfo->toArray();
        if (!empty($sortInfo)) {
            $this->body['sort'] = $sortInfo;
        }

        return parent::getBody();
    }
}
