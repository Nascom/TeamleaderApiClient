<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Department;

use Nascom\TeamleaderApiClient\Model\Department\DepartmentListView;

/**
 * Class DepartmentListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Department
 */
class DepartmentListViewFieldDescription extends DepartmentFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getFields()
    {
        return parent::getFields();
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return DepartmentListView::class;
    }
}
