<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Tags;

use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TagsListRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Tags
 */
class TagsListRequest extends GetRequest implements PageInterface, SortInterface
{
    use MultipleMethodsTrait, PageTrait, SortTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'tags.list';
    }
}
