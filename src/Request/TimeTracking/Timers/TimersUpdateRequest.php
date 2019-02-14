<?php

namespace Nascom\TeamleaderApiClient\Request\TimeTracking\Timers;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class TimersUpdateRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\TimeTracking\Timers
 */
class TimersUpdateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * TimersUpdateRequest constructor.
     *
     * @param array $timer
     */
    public function __construct(array $timer)
    {
        if (
            isset($timer['work_type']) &&
            ($id = $timer['work_type']['id']) != null
        ) {
            $timer['work_type_id'] = $id;
        }

        unset(
            $timer['id'],
            $timer['user'],
            $timer['invoiceable'],
            $timer['work_type'],
            $timer['started_at']
        );

        $this->body = $timer;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'timers.update';
    }
}
