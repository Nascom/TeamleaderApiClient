<?php

namespace Nascom\TeamleaderApiClient\Request\Projects\Projects;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ProjectsAddParticipantRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Projects\Projects
 */
class ProjectsAddParticipantRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ProjectsAddParticipantRequest constructor.
     *
     * @param string $id
     * @param array $participantWithRole
     */
    public function __construct($id, array $participantWithRole)
    {
        $this->body = $participantWithRole;
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'projects.addParticipant';
    }
}
