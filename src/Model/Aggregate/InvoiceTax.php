<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoiceTax
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class InvoiceTax extends Tax
{
    /**
     * @var PaymentAmount
     */
    private $taxable = [];

    /**
     * @var PaymentAmount
     */
    private $tax = [];

    /**
     * @return PaymentAmount
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * @param PaymentAmount $taxable
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
    }

    /**
     * @return PaymentAmount
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param PaymentAmount $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }
}
