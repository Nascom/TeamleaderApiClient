<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class ProjectsInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsInfoRequest extends GetRequest
{
    /**
     * ProjectsInfoRequest constructor.
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
        return 'projects.info';
    }
}
