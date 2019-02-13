<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTimeTracking;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedTimeTrackingFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedTimeTrackingFieldDescription extends FieldDescriptionBase
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
        return LinkedTimeTracking::class;
    }
}
