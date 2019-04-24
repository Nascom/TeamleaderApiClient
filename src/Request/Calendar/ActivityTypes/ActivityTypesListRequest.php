<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\ActivityTypes;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ActivityTypesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Calendar\ActivityTypes
 */
class ActivityTypesListRequest extends GetRequest implements FilterInterface, PageInterface
{
    use MultipleMethodsTrait, FilterTrait, PageTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'activityTypes.list';
    }
}
