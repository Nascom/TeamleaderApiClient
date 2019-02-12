<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsCreateRequest
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsCreateRequest extends PostRequest
{
    /**
     * ProjectsCreateRequest constructor.
     * @param array $project
     */
    public function __construct(array $project)
    {
        foreach ($project['milestones'] as $key => $milestone) {
            $project['milestones'][$key]['responsible_user_id'] =
                $project['milestones'][$key]['responsible_user']['id'];
            unset($project['milestones'][$key]['responsible_user']);
        }

        $this->body = $project;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'projects.create';
    }
}
