<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PhaseHistory
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class PhaseHistory
{
    /**
     * @var Phase
     */
    private $phase = [];

    /**
     * @var \DateTime
     */
    private $startedAt;

    /**
     * @var Account
     */
    private $startedBy = [];

    /**
     * @return Phase
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * @param Phase $phase
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return Account
     */
    public function getStartedBy()
    {
        return $this->startedBy;
    }

    /**
     * @param Account $startedBy
     */
    public function setStartedBy($startedBy)
    {
        $this->startedBy = $startedBy;
    }
}
