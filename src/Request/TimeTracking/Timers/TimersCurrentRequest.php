<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\Timers;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TimersCurrentRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\Timers
 */
class TimersCurrentRequest extends GetRequest
{
    use MultipleMethodsTrait;
    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'timers.current';
    }
}
