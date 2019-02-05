<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Department\Department;
use Nascom\TeamleaderApiClient\Model\Department\DepartmentListView;
use Nascom\TeamleaderApiClient\Request\General\Departments\DepartmentsInfoRequest;
use Nascom\TeamleaderApiClient\Request\General\Departments\DepartmentsListRequest;

/**
 * Class DepartmentRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class DepartmentRepository extends RepositoryBase
{
    /**
     * @param string $id
     * @return Department
     * @throws \Http\Client\Exception
     */
    public function getDepartment($id)
    {
        $request = new DepartmentsInfoRequest($id);

        return $this->handleRequest($request, Department::class);
    }

    /**
     * @return DepartmentListView
     * @throws \Http\Client\Exception
     */
    public function listDepartments()
    {
        $request = new DepartmentsListRequest();

        return $this->handleRequest($request, DepartmentListView::class.'[]');
    }
}
