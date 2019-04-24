<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedDepartmentFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedDepartmentFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'type'
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return LinkedDepartment::class;
    }
}
