<?php

namespace Nascom\TeamleaderApiClient\Request\Project;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveProjectRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Project
 */
class RetrieveProjectRequest extends AbstractPostRequest
{
    /**
     * RetrieveProjectRequest constructor.
     *
     * @param $project_id
     * @param array $options
     */
    public function __construct($project_id, array $options = [])
    {
        $this->options = $options;
        $this->setProjectId($project_id);
    }

    /**
     * @param $project_id
     */
    public function setProjectId($project_id)
    {
        $this->options['project_id'] = $project_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getProject.php';
    }
}
