<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking;

use Nascom\TeamleaderApiClient\Model\TimeTracking\TimeTrackingListView;

/**
 * Class TimeTrackingListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TimeTracking
 */
class TimeTrackingListViewFieldDescription extends TimeTrackingFieldDescriptionBase
{

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return TimeTrackingListView::class;;
    }
}
