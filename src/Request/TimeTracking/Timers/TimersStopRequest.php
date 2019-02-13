<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\Timers;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimersStopRequest
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\Timers
 */
class TimersStopRequest extends PostRequest
{
    /**
     * TimersStopRequest constructor.
     * @param string|null $endedAt
     */
    public function __construct($endedAt = null)
    {
        if ($endedAt != null) {
            $this->body['ended_at'] = $endedAt;
        }
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'timers.stop';
    }
}
