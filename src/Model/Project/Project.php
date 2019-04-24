<?php

namespace Nascom\TeamleaderApiClient\Model\Project;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;

/**
 * Class Project
 *
 * @package Nascom\TeamleaderApiClient\Model\Project
 */
class Project extends ProjectBase
{
    /**
     * @var LinkedMileStone[]
     */
    private $milestones;

    /**
     * @var LinkedParticipantWithRole[]
     */
    private $participants;

    /**
     * @param string $title
     * @param string $startsOn
     * @param LinkedMileStone[] $milestones
     * @param LinkedParticipantWithRole[] $participants
     */
    public function create(
        $title,
        $startsOn,
        array $milestones,
        array $participants
    ) {
        $this->setTitle($title);
        $this->setStartsOn($startsOn);
        $this->milestones = $milestones;
        $this->participants = $participants;
    }

    /**
     * @return LinkedMileStone[]
     */
    public function getMilestones()
    {
        return $this->milestones;
    }

    /**
     * @param LinkedMileStone[] $milestones
     */
    public function setMilestones($milestones)
    {
        $this->milestones = $milestones;
    }

    /**
     * @return LinkedParticipantWithRole[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param LinkedParticipantWithRole[] $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }
}
