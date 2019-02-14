<?php

namespace Nascom\TeamleaderApiClient\Request\General\Departments;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DepartmentsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class DepartmentsListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'departments.list';
    }
}
