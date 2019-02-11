<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Total
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Total
{
    /**
     * @var PaymentAmount
     */
    private $taxExclusive = [];

    /**
     * @var PaymentAmount
     */
    private $taxInclusive = [];

    /**
     * @var PaymentAmount
     */
    private $payable = [];

    /**
     * @var InvoiceTax[]
     */
    private $taxes = [];

    /**
     * @var PaymentAmount
     */
    private $due;

    /**
     * @return PaymentAmount
     */
    public function getTaxExclusive()
    {
        return $this->taxExclusive;
    }

    /**
     * @param PaymentAmount $taxExclusive
     */
    public function setTaxExclusive($taxExclusive)
    {
        $this->taxExclusive = $taxExclusive;
    }

    /**
     * @return PaymentAmount
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * @param PaymentAmount $taxInclusive
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;
    }

    /**
     * @return PaymentAmount
     */
    public function getPayable()
    {
        return $this->payable;
    }

    /**
     * @param PaymentAmount $payable
     */
    public function setPayable($payable)
    {
        $this->payable = $payable;
    }

    /**
     * @return InvoiceTax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param InvoiceTax[] $taxes
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
    }

    /**
     * @return PaymentAmount
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * @param PaymentAmount $due
     */
    public function setDue($due)
    {
        $this->due = $due;
    }
}
