<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Calendar;

use Nascom\TeamleaderApiClient\Model\CalendarEvents\CalendarEventListView;

/**
 * Class CalendarListViewEventFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CalendarEvent
 */
class CalendarListViewEventFieldDescription extends CalendarEventFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return CalendarEventListView::class;
    }
}
