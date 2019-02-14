<?php

namespace Nascom\TeamleaderApiClient\Model\Project;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedSource;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ProjectBase
 *
 * @package Nascom\TeamleaderApiClient\Model\Project
 */
abstract class ProjectBase extends ModelBase
{
    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $status;

    /**
     * @var LinkedCustomer
     */
    private $customer;

    /**
     * @var string
     */
    private $startsOn;

    /**
     * @var string
     */
    private $dueOn;

    /**
     * @var LinkedSource
     */
    private $source;

    /**
     * ProjectBase constructor.
     * @param string|null $title
     * @param string|null $description
     * @param string|null $startsOn
     * @param LinkedCustomer|null $customer
     */
    public function __construct
    (
        $title = null,
        $description = null,
        $startsOn = null,
        LinkedCustomer $customer = null
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->startsOn = $startsOn;
        $this->customer = $customer;
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
     * @return string
     */
    public function getStartsOn()
    {
        return $this->startsOn;
    }

    /**
     * @param string $startsOn
     */
    public function setStartsOn($startsOn)
    {
        $this->startsOn = $startsOn;
    }

    /**
     * @return string
     */
    public function getDueOn()
    {
        return $this->dueOn;
    }

    /**
     * @param string $dueOn
     */
    public function setDueOn($dueOn)
    {
        $this->dueOn = $dueOn;
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
}
