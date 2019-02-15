<?php

namespace Nascom\TeamleaderApiClient\Request\General\WorkTypes;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\BaseRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class WorkTypesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\WorkType
 */
class WorkTypesListRequest extends BaseRequest implements FilterInterface, PageInterface, SortInterface
{
    use MultipleMethodsTrait, FilterTrait, SortTrait, PageTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'workTypes.list';
    }
}
