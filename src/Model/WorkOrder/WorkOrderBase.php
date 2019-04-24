<?php

namespace Nascom\TeamleaderApiClient\Model\WorkOrder;

use DateTime;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;

/**
 * Class WorkOrderBase
 *
 * @package Nascom\TeamleaderApiClient\Model\WorkOrder
 */
abstract class WorkOrderBase
{
    /**
     * @var LinkedCustomer
     */
    private $customer;

    /**
     * @var DateTime
     */
    private $startsAt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $departmentId;

    /**
     * @var string
     */
    private $milestoneId;

    /**
     * @var string
     */
    private $eventId;

    /**
     * @param LinkedCustomer $customer
     * @param DateTime $startsAt
     */
    public function create(
        LinkedCustomer $customer,
        DateTime $startsAt
    ) {
        $this->customer = $customer;
        $this->startsAt = $startsAt;
    }

    /**
     * @return LinkedCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param LinkedCustomer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return DateTime
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @param DateTime $startsAt
     */
    public function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;
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
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * @param string $departmentId
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
    }

    /**
     * @return string
     */
    public function getMilestoneId()
    {
        return $this->milestoneId;
    }

    /**
     * @param string $milestoneId
     */
    public function setMilestoneId($milestoneId)
    {
        $this->milestoneId = $milestoneId;
    }

    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param string $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }
}
