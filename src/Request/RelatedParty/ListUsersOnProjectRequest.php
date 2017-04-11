<?php

namespace Nascom\TeamleaderApiClient\Request\RelatedParty;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListUsersOnProjectRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\RelatedParty
 */
class ListUsersOnProjectRequest extends AbstractPostRequest
{
    /**
     * ListUsersOnProjectRequest constructor.
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
        return 'getUsersOnProject.php';
    }
}
