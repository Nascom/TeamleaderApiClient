<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking;

use Nascom\TeamleaderApiClient\Request\PostRequest;
use spec\PhpSpec\Process\ReRunner\CompositeReRunnerSpec;

/**
 * Class TimeTrackingResumeRequest
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking
 */
class TimeTrackingResumeRequest extends PostRequest
{
    /**
     * TimeTrackingResumeRequest constructor.
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
     * @return string
     */
    public function getEndpoint()
    {
        return 'timeTracking.resume';
    }
}
