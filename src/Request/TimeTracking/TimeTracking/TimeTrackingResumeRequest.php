<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimeTrackingResumeRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking
 */
class TimeTrackingResumeRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimeTrackingResumeRequest constructor.
     *
     * @param string $id
     * @param string|null $startedAt
     */
    public function __construct($id, $startedAt = null)
    {
        $this->body['id'] = $id;

        if ($startedAt != null) {
            $this->body['started_at'] = $startedAt;
        }
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'timeTracking.resume';
    }
}
