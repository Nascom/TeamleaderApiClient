<?php

namespace Nascom\TeamleaderApiClient\Request\Department;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class GetDepartmentsQuery
 *
 * @package Nascom\TeamleaderApiClient\Request\Department
 */
class GetDepartmentsQuery extends AbstractPostRequest
{
    /**
     * GetDepartmentsQuery constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getDepartments.php';
    }
}
