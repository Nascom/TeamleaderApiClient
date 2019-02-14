<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Milestones;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class MilestonesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Projects\Milestones
 */
class MilestonesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'milestones.list';
    }
}
