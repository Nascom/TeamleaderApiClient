<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\Timers;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimersStopRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\Timers
 */
class TimersStopRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimersStopRequest constructor.
     *
     * @param string|null $endedAt
     */
    public function __construct($endedAt = null)
    {
        if ($endedAt != null) {
            $this->body['ended_at'] = $endedAt;
        }
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'timers.stop';
    }
}
