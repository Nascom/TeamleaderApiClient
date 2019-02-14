<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsCreateRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsCreateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsCreateRequest constructor.
     *
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
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'projects.create';
    }
}
