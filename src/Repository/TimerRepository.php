<?php

namespace Nascom\TeamleaderApiClient\Repository;

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
        return $this->handleRequest
        (
            new TimersCurrentRequest(),
            Timer::class
        );
    }

    /**
     * @param Timer $timer
     * @return LinkedTimer
     * @throws Exception
     */
    public function startTimer(Timer $timer)
    {
        return $this->handleRequest
        (
            new TimersStartRequest($this->normalize($timer)),
            LinkedTimer::class
        );
    }

    /**
     * @param \DateTime|null $endedAt
     * @return LinkedTimeTracking
     * @throws Exception
     */
    public function stopTimer(\DateTime $endedAt = null)
    {
        return $this->handleRequest
        (
            new TimersStopRequest($this->normalize($endedAt)),
            LinkedTimeTracking::class
        );
    }

    /**
     * @param Timer $timer
     * @throws Exception
     */
    public function updateTimer(Timer $timer)
    {
        $this->apiClient->handle
        (
            new TimersUpdateRequest($this->normalize($timer))
        );
    }
}
