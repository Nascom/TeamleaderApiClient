<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use Nascom\TeamleaderApiClient\Model\Milestone\Milestone;
use Nascom\TeamleaderApiClient\Model\Milestone\MilestoneListView;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestonesCreateRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestonesInfoRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestonesListRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestoneUpdateRequest;

/**
 * Class MilestoneRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class MilestoneRepository extends RepositoryBase
{
    /**
     * @param array $filters
     * @param array $page
     * @param array $sort
     *
     * @return MilestoneListView[]
     * @throws \Http\Client\Exception
     */
    public function listMilestones(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new MilestonesListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            MilestoneListView::class . '[]'
        );
    }

    /**
     * @param string $id
     *
     * @return Milestone
     * @throws \Http\Client\Exception
     */
    public function getMilestone($id)
    {
        $request = new MilestonesInfoRequest($id);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            Milestone::class
        );
    }

    /**
     * @param Milestone $milestone
     *
     * @return LinkedMileStone
     * @throws \Http\Client\Exception
     */
    public function addMilestone(Milestone $milestone)
    {
        $request = new MilestonesCreateRequest($this->normalize($milestone));
        $request->setMethod('POST');

        return $this->handleRequest(
            $request,
            LinkedMileStone::class
        );
    }

    /**
     * @param Milestone $milestone
     *
     * @throws \Http\Client\Exception
     */
    public function updateMilestone(Milestone $milestone)
    {
        $request = new MilestoneUpdateRequest($this->normalize($milestone));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }
}
