<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class CalculatedTotal
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class CalculatedTotal
{
    /**
     * @var PaymentAmount
     */
    private $taxExclusive;

    /**
     * @var PaymentAmount
     */
    private $taxExclusiveBeforeDiscount;

    /**
     * @var PaymentAmount
     */
    private $taxInclusive;

    /**
     * @var PaymentAmount
     */
    private $taxInclusiveBeforeDiscount;

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
    public function getTaxExclusiveBeforeDiscount()
    {
        return $this->taxExclusiveBeforeDiscount;
    }

    /**
     * @param PaymentAmount $taxExclusiveBeforeDiscount
     */
    public function setTaxExclusiveBeforeDiscount($taxExclusiveBeforeDiscount)
    {
        $this->taxExclusiveBeforeDiscount = $taxExclusiveBeforeDiscount;
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
    public function getTaxInclusiveBeforeDiscount()
    {
        return $this->taxInclusiveBeforeDiscount;
    }

    /**
     * @param PaymentAmount $taxInclusiveBeforeDiscount
     */
    public function setTaxInclusiveBeforeDiscount($taxInclusiveBeforeDiscount)
    {
        $this->taxInclusiveBeforeDiscount = $taxInclusiveBeforeDiscount;
    }
}
