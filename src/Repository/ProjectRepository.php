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

/**
 * Class ProjectRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class ProjectRepository extends RepositoryBase
{
    /**
     * @param array $filters
     * @param array $page
     * @param array $sort
     *
     * @return ProjectListView[]
     * @throws \Http\Client\Exception
     */
    public function listProjects(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new ProjectsListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            ProjectListView::class . '[]'
        );
    }

    /**
     * @param string $id
     *
     * @return Project
     * @throws \Http\Client\Exception
     */
    public function getProject($id)
    {
        $request = new ProjectsInfoRequest($id);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            Project::class
        );
    }

    /**
     * @param Project $project
     *
     * @return LinkedProject
     * @throws \Http\Client\Exception
     */
    public function addProject(Project $project)
    {
        $request = new ProjectsCreateRequest($this->normalize($project));
        $request->setMethod('POST');

        return $this->handleRequest(
            $request,
            LinkedProject::class
        );
    }

    /**
     * @param Project $project
     *
     * @throws \Http\Client\Exception
     */
    public function updateProject(Project $project)
    {
        $request = new ProjectsUpdateRequest($this->normalize($project));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     *
     * @throws \Http\Client\Exception
     */
    public function deleteProject($id)
    {
        $request = new ProjectsDeleteRequest($id);
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param LinkedParticipantWithRole $linkedParticipantWithRole
     *
     * @throws \Http\Client\Exception
     */
    public function addParticipant($id, LinkedParticipantWithRole $linkedParticipantWithRole)
    {
        $request = new ProjectsAddParticipantRequest($id, $this->normalize($linkedParticipantWithRole));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param LinkedParticipantWithRole $linkedParticipantWithRole
     *
     * @throws \Http\Client\Exception
     */
    public function updateParticipant($id, LinkedParticipantWithRole $linkedParticipantWithRole)
    {
        $request = new ProjectsUpdateParticipantRequest($id, $this->normalize($linkedParticipantWithRole));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }
}
