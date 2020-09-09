<?php

namespace Nascom\TeamleaderApiClient\Model\Deal;

use DateTime;
use Nascom\TeamleaderApiClient\Model\Aggregate\EstimatedValue;
use Nascom\TeamleaderApiClient\Model\Aggregate\Lead;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedSource;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class DealBase
 *
 * @package Nascom\TeamleaderApiClient\Model\Deal
 */
abstract class DealBase extends ModelBase
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $status;

    /**
     * @var Lead
     */
    private $lead;

    /**
     * @var LinkedDepartment
     */
    private $department;

    /**
     * @var EstimatedValue
     */
    private $estimatedValue;

    /**
     * @var string
     */
    private $estimatedClosingDate;

    /**
     * @var float
     */
    private $estimatedProbability;

    /**
     * @var LinkedUser
     */
    private $responsibleUser;

    /**
     * @var DateTime
     */
    private $closedAt;

    /**
     * @var LinkedSource
     */
    private $source;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $webUrl;

    /**
     * @param Lead $lead
     * @param string $title
     */
    public function create(Lead $lead, $title)
    {
        $this->lead = $lead;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $reference
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * @param Lead $lead
     */
    public function setLead($lead)
    {
        $this->lead = $lead;
    }

    /**
     * @return LinkedDepartment
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param LinkedDepartment $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return EstimatedValue
     */
    public function getEstimatedValue()
    {
        return $this->estimatedValue;
    }

    /**
     * @param EstimatedValue $estimatedValue
     */
    public function setEstimatedValue($estimatedValue)
    {
        $this->estimatedValue = $estimatedValue;
    }

    /**
     * @return string
     */
    public function getEstimatedClosingDate()
    {
        return $this->estimatedClosingDate;
    }

    /**
     * @param string $estimatedClosingDate
     */
    public function setEstimatedClosingDate($estimatedClosingDate)
    {
        $this->estimatedClosingDate = $estimatedClosingDate;
    }

    /**
     * @return float
     */
    public function getEstimatedProbability()
    {
        return $this->estimatedProbability;
    }

    /**
     * @param float $estimatedProbability
     */
    public function setEstimatedProbability($estimatedProbability)
    {
        $this->estimatedProbability = $estimatedProbability;
    }

    /**
     * @return LinkedUser
     */
    public function getResponsibleUser()
    {
        return $this->responsibleUser;
    }

    /**
     * @param LinkedUser $responsibleUser
     */
    public function setResponsibleUser($responsibleUser)
    {
        $this->responsibleUser = $responsibleUser;
    }

    /**
     * @return DateTime
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * @param DateTime $closedAt
     */
    public function setClosedAt($closedAt)
    {
        $this->closedAt = $closedAt;
    }

    /**
     * @return LinkedSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param LinkedSource $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }

    /**
     * @param string $webUrl
     */
    public function setWebUrl($webUrl)
    {
        $this->webUrl = $webUrl;
    }
}
