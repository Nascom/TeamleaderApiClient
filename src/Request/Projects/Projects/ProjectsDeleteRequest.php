<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsDeleteRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsDeleteRequest extends PostRequest
{
    /**
     * ProjectsDeleteRequest constructor.
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
        return 'projects.delete';
    }
}
