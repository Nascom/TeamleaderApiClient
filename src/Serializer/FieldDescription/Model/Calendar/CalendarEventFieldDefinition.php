<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Calendar;

use const Grpc\CALL_ERROR_NOT_INVOKED;
use Nascom\TeamleaderApiClient\Model\CalendarEvents\CalendarEvent;

/**
 * Class CalendarEventFieldDefinition
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CalendarEvent
 */
class CalendarEventFieldDefinition extends CalendarEventFieldDescriptionBase
{

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return CalendarEvent::class;
    }
}
