<?php

namespace Nascom\TeamleaderApiClient\Request\General\Departments;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DepartmentsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class DepartmentsListRequest extends GetRequest implements FilterInterface, SortInterface
{
    use MultipleMethodsTrait, FilterTrait, SortTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'departments.list';
    }
}
