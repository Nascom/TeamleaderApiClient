<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingAddRequest
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking
 */
class TimeTrackingAddRequest extends PostRequest
{
    /**
     * TimeTrackingAddRequest constructor.
     * @param array $timeTracking
     */
    public function __construct(array $timeTracking)
    {
        if (
            isset($timeTracking['work_type']) &&
            ($id = $timeTracking['work_type']['id']) != null
        ) {
            $timeTracking['work_type_id'] = $id;
        }

        unset
        (
            $timeTracking['work_type']
        );

        $this->body = $timeTracking;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'timeTracking.add';
    }
}
