<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class CalendarEventsInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\CalendarEvent\CalendarEvents
 */
class CalendarEventsInfoRequest extends GetRequest
{
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'events.info';
    }
}
