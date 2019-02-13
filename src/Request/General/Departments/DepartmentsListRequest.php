<?php

namespace Nascom\TeamleaderApiClient\Request\General\Departments;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class DepartmentsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class DepartmentsListRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'departments.list';
    }
}
