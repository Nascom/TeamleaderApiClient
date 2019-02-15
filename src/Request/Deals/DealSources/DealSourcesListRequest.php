<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\DealSources;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealSourcesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\DealSources
 */
class DealSourcesListRequest extends GetRequest implements FilterInterface, PageInterface, SortInterface
{
    use MultipleMethodsTrait, FilterTrait, PageTrait, SortTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'dealSources.list';
    }
}
