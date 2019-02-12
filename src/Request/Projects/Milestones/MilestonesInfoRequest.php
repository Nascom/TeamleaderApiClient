<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Milestones;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class MilestonesInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Milestones
 */
class MilestonesInfoRequest extends GetRequest
{
    /**
     * MilestonesInfoRequest constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'milestones.info';
    }
}
