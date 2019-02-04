<?php

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

abstract class DepartmentFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
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