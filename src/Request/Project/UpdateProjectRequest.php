<?php

namespace Nascom\TeamleaderApiClient\Request\Project;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateProjectRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Project
 */
class UpdateProjectRequest extends AbstractPostRequest
{
    /**
     * UpdateProjectRequest constructor.
     *
     * @param $project_id
     * @param $track_changes
     * @param $title
     * @param array $options
     *   Optional parameters:
     *   - custom_field_ID
     */
    public function __construct($project_id, $track_changes, $title, array $options = [])
    {
        $this->options = $options;
        $this->setProjectId($project_id);
        $this->setTrackChanges($track_changes);
        $this->setTitle($title);
    }

    /**
     * @param $project_id
     */
    public function setProjectId($project_id)
    {
        $this->options['project_id'] = $project_id;
    }

    /**
     * @param $track_changes
     */
    public function setTrackChanges($track_changes)
    {
        $this->options['track_changes'] = $track_changes;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->options['title'] = $title;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addProject.php';
    }
}
