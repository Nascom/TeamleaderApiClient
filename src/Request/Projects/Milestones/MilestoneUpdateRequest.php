<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Milestones;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class MilestoneUpdateRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Milestones
 */
class MilestoneUpdateRequest extends PostRequest
{
    /**
     * MilestoneUpdateRequest constructor.
     * @param array $milestone
     */
    public function __construct(array $milestone)
    {
        $milestone['responsible_user_id'] = $milestone['responsible_user']['id'];

        unset
        (
            $milestone['project'],
            $milestone['status'],
            $milestone['responsible_user']
        );

        $this->body = $milestone;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'milestones.update';
    }
}
