<?php

namespace Nascom\TeamleaderApiClient\Model\Timer;

use DateTime;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class TimerBase
 *
 * @package Nascom\TeamleaderApiClient\Model\Timer
 */
abstract class TimerBase extends ModelBase
{
    /**
     * @var LinkedUser
     */
    private $user;

    /**
     * @var LinkedWorkType
     */
    private $workType;

    /**
     * @var DateTime
     */
    private $startedAt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var LinkedSubject
     */
    private $subject;

    /**
     * @var boolean
     */
    private $invoiceable;

    /**
     * TimerBase constructor.
     * @param LinkedWorkType|null $workType
     * @param DateTime|null $startedAt
     * @param string|null $description
     * @param LinkedSubject|null $subject
     */
    public function __construct
    (
        LinkedWorkType $workType = null,
        DateTime $startedAt = null,
        $description = null,
        LinkedSubject $subject = null
    ) {
        $this->workType = $workType;
        $this->startedAt = $startedAt;
        $this->description = $description;
        $this->subject = $subject;
    }

    /**
     * @return LinkedUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param LinkedUser $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return LinkedWorkType
     */
    public function getWorkType()
    {
        return $this->workType;
    }

    /**
     * @param LinkedWorkType $workType
     */
    public function setWorkType($workType)
    {
        $this->workType = $workType;
    }

    /**
     * @return DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param DateTime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return LinkedSubject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param LinkedSubject $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return bool
     */
    public function getInvoiceable()
    {
        return $this->invoiceable;
    }

    /**
     * @param bool $invoiceable
     */
    public function setInvoiceable($invoiceable)
    {
        $this->invoiceable = $invoiceable;
    }
}
