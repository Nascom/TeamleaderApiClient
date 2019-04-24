<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Milestones;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class MilestonesInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Projects\Milestones
 */
class MilestonesInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * MilestonesInfoRequest constructor.
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
        return 'milestones.info';
    }
}
