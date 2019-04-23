<?php

namespace Nascom\TeamleaderApiClient\Repository;

use DateTime;
use Http\Client\Exception;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTimer;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTimeTracking;
use Nascom\TeamleaderApiClient\Model\Timer\Timer;
use Nascom\TeamleaderApiClient\Request\TimeTracking\Timers\TimersCurrentRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\Timers\TimersStartRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\Timers\TimersStopRequest;
use Nascom\TeamleaderApiClient\Request\TimeTracking\Timers\TimersUpdateRequest;

/**
 * Class TimerRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class TimerRepository extends RepositoryBase
{
    /**
     * @return Timer
     * @throws Exception
     */
    public function currentTimer()
    {
        $request = new TimersCurrentRequest();
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            Timer::class
        );
    }

    /**
     * @param Timer $timer
     *
     * @return LinkedTimer
     * @throws Exception
     */
    public function startTimer(Timer $timer)
    {
        $request = new TimersStartRequest($this->normalize($timer));
        $request->setMethod('POST');

        return $this->handleRequest(
            $request,
            LinkedTimer::class
        );
    }

    /**
     * @param DateTime|null $endedAt
     *
     * @return LinkedTimeTracking
     * @throws Exception
     */
    public function stopTimer(DateTime $endedAt = null)
    {
        $request = new TimersStopRequest($this->normalize($endedAt));
        $request->setMethod('POST');

        return $this->handleRequest(
            $request,
            LinkedTimeTracking::class
        );
    }

    /**
     * @param Timer $timer
     *
     * @throws Exception
     */
    public function updateTimer(Timer $timer)
    {
        $request = new TimersUpdateRequest($this->normalize($timer));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }
}
