<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Milestones;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class MilestonesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Milestones
 */
class MilestonesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'milestones.list';
    }
}
