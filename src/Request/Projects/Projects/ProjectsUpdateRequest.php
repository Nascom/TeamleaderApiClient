<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsUpdateRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsUpdateRequest extends PostRequest
{
    /**
     * ProjectsUpdateRequest constructor.
     * @param array $project
     */
    public function __construct(array $project)
    {
        unset
        (
            $project['reference'],
            $project['customer'],
            $project['due_on'],
            $project['source'],
            $project['milestones'],
            $project['participants']
        );
        $this->body = $project;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'projects.update';
    }
}
