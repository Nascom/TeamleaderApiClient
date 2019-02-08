<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class CalendarEventsListRequest
 * @package Nascom\TeamleaderApiClient\Request\CalendarEvent\CalendarEvents
 */
class CalendarEventsListRequest extends  GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'events.list';
    }
}
