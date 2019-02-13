<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class TimeTrackingListRequest
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking
 */
class TimeTrackingListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'timeTracking.list';
    }
}
