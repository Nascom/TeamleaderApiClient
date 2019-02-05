<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Department;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class DepartmentFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Department
 */
abstract class DepartmentFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
            'vat_number',
            'currency',
        ];
    }
}
