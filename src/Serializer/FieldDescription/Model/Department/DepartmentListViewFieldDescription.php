<?php
/**
 * Created by PhpStorm.
 * User: yoeri
 * Date: 04.02.19
 * Time: 16:05
 */

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Department;


use DepartmentFieldDescriptionBase;
use DepartmentListView;

class DepartmentListViewFieldDescription extends DepartmentFieldDescriptionBase
{
    public function getFields()
    {
        return parent::getFields();
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return DepartmentListView::class;
    }
}