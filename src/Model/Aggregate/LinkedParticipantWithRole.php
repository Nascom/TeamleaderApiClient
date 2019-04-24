<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class LinkedParticipantWithRole
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class LinkedParticipantWithRole
{
    /**
     * @var LinkedParticipant
     */
    private $participant;

    /**
     * @var
     */
    private $role;

    /**
     * LinkedParticipantWithRole constructor.
     * @param LinkedParticipant|null $participant
     * @param string|null $role
     */
    public function __construct
    (
        $participant = null,
        $role = null
    ) {
        $this->participant = $participant;
        $this->role = $role;
    }

    /**
     * @return LinkedParticipant
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param LinkedParticipant $participant
     */
    public function setParticipant($participant)
    {
        $this->participant = $participant;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
}
