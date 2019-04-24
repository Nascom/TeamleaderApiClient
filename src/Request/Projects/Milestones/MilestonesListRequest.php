<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Milestones;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class MilestonesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Projects\Milestones
 */
class MilestonesListRequest extends GetRequest implements FilterInterface, PageInterface, SortInterface
{
    use MultipleMethodsTrait, FilterTrait, PageTrait, SortTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'milestones.list';
    }
}
