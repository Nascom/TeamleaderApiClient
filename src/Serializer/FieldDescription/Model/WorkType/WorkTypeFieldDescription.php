<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkType;

use Nascom\TeamleaderApiClient\Model\WorkTypes\WorkTypes;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WorkTypeFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkType
 */
class WorkTypeFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return WorkTypes::class;
    }
}
