<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingUpdateRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking
 */
class TimeTrackingUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimeTrackingUpdateRequest constructor.
     *
     * @param array $timeTracking
     */
    public function __construct(array $timeTracking)
    {
        $this->body = $timeTracking;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'timeTracking.update';
    }
}
