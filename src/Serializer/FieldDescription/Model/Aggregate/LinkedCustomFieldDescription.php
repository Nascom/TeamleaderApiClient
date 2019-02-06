<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDefinition;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedCustomFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedCustomFieldDescription extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'definition' => ['target_class' => LinkedDefinition::class],
            'value'
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return LinkedCustomField::class;
    }
}
