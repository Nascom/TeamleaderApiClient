<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedProject;
use Nascom\TeamleaderApiClient\Model\Project\Project;
use Nascom\TeamleaderApiClient\Model\Project\ProjectListView;
use Nascom\TeamleaderApiClient\Request\Projects\Projects\ProjectsAddParticipantRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Projects\ProjectsCreateRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Projects\ProjectsDeleteRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Projects\ProjectsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Projects\ProjectsListRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Projects\ProjectsUpdateParticipantRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Projects\ProjectsUpdateRequest;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project\ProjectFieldDescription;

/**
 * Class ProjectRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class ProjectRepository extends RepositoryBase
{
    /**
     * @return ProjectListView[]
     * @throws \Http\Client\Exception
     */
    public function listProjects()
    {
        return $this->handleRequest
        (
            new ProjectsListRequest(),
            ProjectListView::class.'[]'
        );
    }

    /**
     * @param string $id
     * @return Project
     * @throws \Http\Client\Exception
     */
    public function getProject($id)
    {
        return $this->handleRequest
        (
            new ProjectsInfoRequest($id),
            Project::class
        );
    }

    /**
     * @param Project $project
     * @return LinkedProject
     * @throws \Http\Client\Exception
     */
    public function addProject(Project $project)
    {
        return $this->handleRequest
        (
            new ProjectsCreateRequest($this->normalize($project)),
            LinkedProject::class
        );
    }

    /**
     * @param Project $project
     * @throws \Http\Client\Exception
     */
    public function updateProject(Project $project)
    {
        $this->apiClient->handle
        (
            new ProjectsUpdateRequest($this->normalize($project))
        );
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function deleteProject($id)
    {
        $this->apiClient->handle
        (
            new ProjectsDeleteRequest($id)
        );
    }

    /**
     * @param string $id
     * @param LinkedParticipantWithRole $linkedParticipantWithRole
     * @throws \Http\Client\Exception
     */
    public function addParticipant($id, LinkedParticipantWithRole $linkedParticipantWithRole)
    {
        $this->apiClient->handle
        (
            new ProjectsAddParticipantRequest($id, $this->normalize($linkedParticipantWithRole))
        );
    }

    /**
     * @param string $id
     * @param LinkedParticipantWithRole $linkedParticipantWithRole
     * @throws \Http\Client\Exception
     */
    public function updateParticipant($id, LinkedParticipantWithRole $linkedParticipantWithRole)
    {
        $this->apiClient->handle
        (
            new  ProjectsUpdateParticipantRequest($id, $this->normalize($linkedParticipantWithRole))
        );
    }
}
