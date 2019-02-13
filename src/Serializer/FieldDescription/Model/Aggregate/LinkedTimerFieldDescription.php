<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTimer;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedTimerFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedTimerFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'type',
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return LinkedTimer::class;
    }
}
