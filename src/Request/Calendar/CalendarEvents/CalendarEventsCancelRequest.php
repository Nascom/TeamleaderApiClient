<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CalendarEventsCancelRequest
 * @package Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents
 */
class CalendarEventsCancelRequest extends PostRequest
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
        return 'events.cancel';
    }
}
