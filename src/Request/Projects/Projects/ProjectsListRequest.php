<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class ProjectsListRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'projects.list';
    }
}
