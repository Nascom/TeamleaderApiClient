<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkTypes;

use Nascom\TeamleaderApiClient\Model\WorkTypes\WorkType;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WorkTypeFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkTypes
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
        return WorkType::class;
    }
}
