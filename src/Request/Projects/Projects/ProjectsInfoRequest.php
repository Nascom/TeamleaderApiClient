<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProjectsInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsInfoRequest constructor.
     *
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
        return 'projects.info';
    }
}
