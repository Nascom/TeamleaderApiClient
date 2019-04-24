<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CalendarEventsInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CalendarEvent\CalendarEvents
 */
class CalendarEventsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * CalendarEventsInfoRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'events.info';
    }
}
