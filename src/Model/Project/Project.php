<?php

namespace Nascom\TeamleaderApiClient\Model\Project;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;

/**
 * Class Project
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
     * Project constructor.
     * @param string|null $title
     * @param string|null $description
     * @param string|null $startsOn
     * @param array|null $milestones
     * @param array|null $participants
     * @param LinkedCustomer|null $customer
     */
    public function __construct
    (
        $title = null,
        $description = null,
        $startsOn = null,
        array $milestones = null,
        array $participants = null,
        LinkedCustomer $customer = null
    ) {
        parent::__construct($title, $description, $startsOn, $customer);
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
