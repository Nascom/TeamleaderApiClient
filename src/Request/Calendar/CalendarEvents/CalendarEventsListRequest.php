<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CalendarEventsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CalendarEvent\CalendarEvents
 */
class CalendarEventsListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'events.list';
    }
}
