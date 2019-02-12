<?php

namespace Nascom\TeamleaderApiClient\Model\CreditNote;

use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedInvoice;
use Nascom\TeamleaderApiClient\Model\Aggregate\Total;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CreditNoteBase
 * @package Nascom\TeamleaderApiClient\Model\CustomFieldDefinition
 */
abstract class CreditNoteBase extends ModelBase
{
    /**
     * @var LinkedDepartment
     */
    private $department;

    /**
     * @var string
     */
    private $creditNoteNumber;

    /**
     * @var string
     */
    private $creditNoteDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var LinkedInvoice
     */
    private $invoice;

    /**
     * @var boolean
     */
    private $paid;

    /**
     * @var \DateTime
     */
    private $paidAt;

    /**
     * @var InvoiceeMinimal
     */
    private $invoicee;

    /**
     * @var Total
     */
    private $total;

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
    public function getCreditNoteNumber()
    {
        return $this->creditNoteNumber;
    }

    /**
     * @param string $creditNoteNumber
     */
    public function setCreditNoteNumber($creditNoteNumber)
    {
        $this->creditNoteNumber = $creditNoteNumber;
    }

    /**
     * @return string
     */
    public function getCreditNoteDate()
    {
        return $this->creditNoteDate;
    }

    /**
     * @param string $creditNoteDate
     */
    public function setCreditNoteDate($creditNoteDate)
    {
        $this->creditNoteDate = $creditNoteDate;
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
     * @return LinkedInvoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param LinkedInvoice $invoice
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * @return bool
     */
    public function isPaid()
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
     * @return InvoiceeMinimal
     */
    public function getInvoicee()
    {
        return $this->invoicee;
    }

    /**
     * @param InvoiceeMinimal $invoicee
     */
    public function setInvoicee($invoicee)
    {
        $this->invoicee = $invoicee;
    }

    /**
     * @return Total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param Total $total
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
}
