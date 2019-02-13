<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class TimeTrackingInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking
 */
class TimeTrackingInfoRequest extends GetRequest
{
    /**
     * TimeTrackingInfoRequest constructor.
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
        return 'timeTracking.info';
    }
}
