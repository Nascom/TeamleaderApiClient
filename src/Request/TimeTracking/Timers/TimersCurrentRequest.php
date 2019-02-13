<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\Timers;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class TimersCurrentRequest
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\Timers
 */
class TimersCurrentRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'timers.current';
    }
}
