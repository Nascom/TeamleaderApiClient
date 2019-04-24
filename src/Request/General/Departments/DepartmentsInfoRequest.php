<?php

namespace Nascom\TeamleaderApiClient\Request\General\Departments;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DepartmentsInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class DepartmentsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * DepartmentsInfoRequest constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'departments.info';
    }
}
