<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ActivityType;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ActivityTypeFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ActivityType
 */
abstract class ActivityTypeFieldDescriptionBase extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
        ];
    }
}
