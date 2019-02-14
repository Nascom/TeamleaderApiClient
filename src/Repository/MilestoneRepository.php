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
     * @return MilestoneListView[]
     * @throws \Http\Client\Exception
     */
    public function listMilestones()
    {
        $request = new MilestonesListRequest();

        return $this->handleRequest(
            $request,
            MilestoneListView::class.'[]'
        );
    }

    /**
     * @param string $id
     * @return Milestone
     * @throws \Http\Client\Exception
     */
    public function getMilestone($id)
    {
        $request = new MilestonesInfoRequest($id);

        return $this->handleRequest(
            $request,
            Milestone::class
        );
    }

    /**
     * @param Milestone $milestone
     * @return LinkedMileStone
     * @throws \Http\Client\Exception
     */
    public function addMilestone(Milestone $milestone)
    {
        $request = new MilestonesCreateRequest($this->normalize($milestone));

        return $this->handleRequest(
            $request,
            LinkedMileStone::class
        );
    }

    /**
     * @param Milestone $milestone
     * @throws \Http\Client\Exception
     */
    public function updateMilestone(Milestone $milestone)
    {
        $request = new MilestoneUpdateRequest($this->normalize($milestone));

        $this->apiClient->handle($request);
    }
}
