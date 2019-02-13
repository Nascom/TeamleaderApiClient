<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTimer;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTimeTracking;
use Nascom\TeamleaderApiClient\Model\TimeTracking\TimeTracking;
use Nascom\TeamleaderApiClient\Model\TimeTracking\TimeTrackingListView;
use Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingAddRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingDeleteRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingInfoRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingListRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingResumeRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\TimeTracking\TimeTrackingUpdateRequest;

/**
 * Class TimeTrackingRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class TimeTrackingRepository extends RepositoryBase
{
    /**
     * @return TimeTrackingListView[]
     * @throws \Http\Client\Exception
     */
    public function listTimeTracking()
    {
        return $this->handleRequest
        (
            new TimeTrackingListRequest(),
            TimeTrackingListView::class.'[]'
        );
    }

    /**
     * @param string $id
     * @return TimeTracking
     * @throws \Http\Client\Exception
     */
    public function getTimeTracking($id)
    {
        return $this->handleRequest
        (
            new TimeTrackingInfoRequest($id),
            TimeTracking::class
        );
    }

    /**
     * @param TimeTracking $timeTracking
     * @return LinkedTimeTracking
     * @throws \Http\Client\Exception
     */
    public function addTimeTracking(TimeTracking $timeTracking)
    {
        return $this->handleRequest
        (
            new TimeTrackingAddRequest($this->normalize($timeTracking)),
            LinkedTimeTracking::class
        );
    }

    /**
     * @param TimeTracking $timeTracking
     * @throws \Http\Client\Exception
     */
    public function updateTimeTracking(TimeTracking $timeTracking)
    {
        $this->apiClient->handle
        (
            new TimeTrackingUpdateRequest($this->normalize($timeTracking))
        );
    }

    /**
     * @param string $id
     * @param \DateTime|null $startedAt
     * @return LinkedTimer
     * @throws \Http\Client\Exception
     */
    public function resumeTimeTracking($id, $startedAt = null)
    {
        return $this->handleRequest
        (
            new TimeTrackingResumeRequest($id, $startedAt),
            LinkedTimer::class
        );
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function deleteTimeTracking($id)
    {
        $this->apiClient->handle
        (
            new TimeTrackingDeleteRequest($id)
        );
    }
}
