<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking;

use Nascom\TeamleaderApiClient\Model\TimeTracking\TimeTracking;

/**
 * Class TimeTrackingFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking
 */
class TimeTrackingFieldDescription extends TimeTrackingFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return TimeTracking::class;
    }
}
