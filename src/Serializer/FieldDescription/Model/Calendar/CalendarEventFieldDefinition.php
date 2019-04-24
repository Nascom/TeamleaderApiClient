<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Calendar;

use Nascom\TeamleaderApiClient\Model\CalendarEvents\CalendarEvent;

/**
 * Class CalendarEventFieldDefinition
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CalendarEvent
 */
class CalendarEventFieldDefinition extends CalendarEventFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return CalendarEvent::class;
    }
}
