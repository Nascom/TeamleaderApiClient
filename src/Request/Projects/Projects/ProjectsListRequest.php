<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProjectsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsListRequest extends GetRequest implements FilterInterface, PageInterface, SortInterface
{
    use MultipleMethodsTrait, FilterTrait, PageTrait, SortTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'projects.list';
    }
}
