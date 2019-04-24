<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkType;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WorkTypeFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkType
 */
abstract class WorkTypeFieldDescriptionBase extends FieldDescriptionBase
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
}
