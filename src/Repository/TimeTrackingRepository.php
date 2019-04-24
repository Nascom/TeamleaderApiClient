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
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class TimeTrackingRepository extends RepositoryBase
{
    /**
     * @param array $filters
     * @param array $page
     * @param array $sort
     *
     * @return TimeTrackingListView[]
     * @throws \Http\Client\Exception
     */
    public function listTimeTracking(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new TimeTrackingListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);

        return $this->handleRequest(
            $request,
            TimeTrackingListView::class . '[]'
        );
    }

    /**
     * @param string $id
     *
     * @return TimeTracking
     * @throws \Http\Client\Exception
     */
    public function getTimeTracking($id)
    { // TODO Broken Teamleader -> 400, "Key id must be present"
        $request = new TimeTrackingInfoRequest($id);

        return $this->handleRequest(
            $request,
            TimeTracking::class
        );
    }

    /**
     * @param TimeTracking $timeTracking
     *
     * @return LinkedTimeTracking
     * @throws \Http\Client\Exception
     */
    public function addTimeTracking(TimeTracking $timeTracking)
    {
        $request = new TimeTrackingAddRequest($this->normalize($timeTracking));

        return $this->handleRequest(
            $request,
            LinkedTimeTracking::class
        );
    }

    /**
     * @param TimeTracking $timeTracking
     *
     * @throws \Http\Client\Exception
     */
    public function updateTimeTracking(TimeTracking $timeTracking)
    {
        $request = new TimeTrackingUpdateRequest($this->normalize($timeTracking));

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param \DateTime|null $startedAt
     *
     * @return LinkedTimer
     * @throws \Http\Client\Exception
     */
    public function resumeTimeTracking($id, $startedAt = null)
    {
        $request = new TimeTrackingResumeRequest($id, $startedAt);

        return $this->handleRequest(
            $request,
            LinkedTimer::class
        );
    }

    /**
     * @param string $id
     *
     * @throws \Http\Client\Exception
     */
    public function deleteTimeTracking($id)
    {
        $request = new TimeTrackingDeleteRequest($id);

        $this->apiClient->handle($request);
    }
}
