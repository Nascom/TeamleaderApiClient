<?php

namespace Nascom\TeamleaderApiClient\Repository;

use function GuzzleHttp\Psr7\normalize_header;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use Nascom\TeamleaderApiClient\Model\Milestone\Milestone;
use Nascom\TeamleaderApiClient\Model\Milestone\MilestoneListView;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestonesCreateRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestonesInfoRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestonesListRequest;
use Nascom\TeamleaderApiClient\Request\Projects\Milestones\MilestoneUpdateRequest;

/**
 * Class MilestoneRepository
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
        return $this->handleRequest
        (
            new MilestonesListRequest(),
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
        return $this->handleRequest
        (
            new MilestonesInfoRequest($id),
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
        return $this->handleRequest
        (
            new MilestonesCreateRequest($this->normalize($milestone)),
            LinkedMileStone::class
        );
    }

    /**
     * @param Milestone $milestone
     * @throws \Http\Client\Exception
     */
    public function updateMilestone(Milestone $milestone)
    {
        $this->apiClient->handle(new MilestoneUpdateRequest($this->normalize($milestone)));
    }
}
