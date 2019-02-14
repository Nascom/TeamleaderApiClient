<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CalendarEventsCancelRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Calendar\CalendarEvents
 */
class CalendarEventsCancelRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CalendarEventsCancelRequest constructor.
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
        return 'events.cancel';
    }
}
