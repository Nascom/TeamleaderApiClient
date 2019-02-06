<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\CustomField;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CustomFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition
 */
class CustomFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'value'
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return CustomField::class;
    }
}
