<?php

namespace Nascom\TeamleaderApiClient\Model\Invoice;

use Nascom\TeamleaderApiClient\Model\Aggregate\DiscountWithDescription;
use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\Aggregate\Invoicee;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;

/**
 * Class Invoice
 *
 * @package Nascom\TeamleaderApiClient\Model\Invoice
 */
class Invoice extends InvoiceBase
{
    /**
     * @var DiscountWithDescription[]
     */
    private $discounts;

    /**
     * @var GroupedLine[]
     */
    private $groupedLines;

    /**
     * @var PaymentTerm
     */
    private $paymentTerm;

    /**
     * @var PaymentWithDate
     */
    private $payments;

    /**
     * @var string
     */
    private $paymentReference;

    /**
     * @var string
     */
    private $note;

    /**
     * @param Invoicee $invoicee
     * @param LinkedDepartment $department
     * @param PaymentTerm $paymentTerm
     * @param GroupedLine[] $groupedLines
     */
    public function create(
        Invoicee $invoicee,
        LinkedDepartment $department,
        PaymentTerm $paymentTerm,
        array $groupedLines
    ) {
        $this->setInvoicee($invoicee);
        $this->setDepartment($department);
        $this->paymentTerm = $paymentTerm;
        $this->groupedLines = $groupedLines;
    }

    /**
     * @return DiscountWithDescription[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * @param DiscountWithDescription[] $discounts
     */
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;
    }

    /**
     * @return GroupedLine[]
     */
    public function getGroupedLines()
    {
        return $this->groupedLines;
    }

    /**
     * @param GroupedLine[] $groupedLines
     */
    public function setGroupedLines($groupedLines)
    {
        $this->groupedLines = $groupedLines;
    }

    /**
     * @return PaymentTerm
     */
    public function getPaymentTerm()
    {
        return $this->paymentTerm;
    }

    /**
     * @param PaymentTerm $paymentTerm
     */
    public function setPaymentTerm($paymentTerm)
    {
        $this->paymentTerm = $paymentTerm;
    }

    /**
     * @return PaymentWithDate
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param PaymentWithDate $payments
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
    }

    /**
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->paymentReference;
    }

    /**
     * @param string $paymentReference
     */
    public function setPaymentReference($paymentReference)
    {
        $this->paymentReference = $paymentReference;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }
}
