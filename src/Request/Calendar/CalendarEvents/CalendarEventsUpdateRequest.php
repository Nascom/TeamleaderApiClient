<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CalendarEventsUpdateRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents
 */
class CalendarEventsUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CalendarEventsUpdateRequest constructor.
     *
     * @param array $calendarEvent
     */
    public function __construct(array $calendarEvent)
    {
        $activityType = $calendarEvent['activity_type'];
        $calendarEvent['activity_type_id'] = $activityType['id'];

        unset(
            $calendarEvent['activity_type'],
            $calendarEvent['creator'],
            $calendarEvent['todo']
        );

        unset($calendarEvent['attendees']); // Bug in Teamleader - "attendees must have a length lower than 0"
        unset($calendarEvent['location']); // Bug in Teamleader - “location must be null"

        $this->body = $calendarEvent;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'events.update';
    }
}
