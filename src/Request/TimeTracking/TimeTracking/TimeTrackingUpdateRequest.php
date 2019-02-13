<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingUpdateRequest
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking
 */
class TimeTrackingUpdateRequest extends PostRequest
{
    /**
     * TimeTrackingUpdateRequest constructor.
     * @param array $timeTracking
     */
    public function __construct(array $timeTracking)
    {
        $this->body = $timeTracking;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'timeTracking.update';
    }
}
