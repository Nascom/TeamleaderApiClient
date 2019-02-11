<?php

namespace Nascom\TeamleaderApiClient\Model\Invoice;

use Nascom\TeamleaderApiClient\Model\Aggregate\Invoicee;
use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceeExtended;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class InvoiceBase
 * @package Nascom\TeamleaderApiClient\Model\Invoicee
 */
abstract class InvoiceBase extends ModelBase
{
    /**
     * @var LinkedDepartment
     */
    private $department = [];

    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var Invoicee|InvoiceeExtended
     */
    private $invoicee = [];

    /**
     * @var string
     */
    private $invoiceDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $dueOn;

    /**
     * @var boolean
     */
    private $paid;

    /**
     * @var \DateTime
     */
    private $paidAt;

    /**
     * @var array
     */
    private $total = [];

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

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
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @param string $invoiceDate
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
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
     * @return bool
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
    }

    /**
     * @return \DateTime
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }

    /**
     * @param \DateTime $paidAt
     */
    public function setPaidAt($paidAt)
    {
        $this->paidAt = $paidAt;
    }

    /**
     * @return array
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param array $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return Invoicee
     */
    public function getInvoicee()
    {
        return $this->invoicee;
    }

    /**
     * @param Invoicee $invoicee
     */
    public function setInvoicee($invoicee)
    {
        $this->invoicee = $invoicee;
    }
}
