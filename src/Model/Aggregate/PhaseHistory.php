<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PhaseHistory
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class PhaseHistory
{
    /**
     * @var LinkedPhase
     */
    private $phase;

    /**
     * @var \DateTime
     */
    private $startedAt;

    /**
     * @var LinkedUser
     */
    private $startedBy;

    /**
     * @return LinkedPhase
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * @param LinkedPhase $phase
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
     * @return LinkedUser
     */
    public function getStartedBy()
    {
        return $this->startedBy;
    }

    /**
     * @param LinkedUser $startedBy
     */
    public function setStartedBy($startedBy)
    {
        $this->startedBy = $startedBy;
    }
}
