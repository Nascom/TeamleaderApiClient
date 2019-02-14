<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\Timers;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimersStartRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\Timers
 */
class TimersStartRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimersStartRequest constructor.
     *
     * @param array $timer
     */
    public function __construct(array $timer)
    {
        $this->body = $timer;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'timers.start';
    }
}
