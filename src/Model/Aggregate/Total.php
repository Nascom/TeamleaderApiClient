<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Total
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Total
{
    /**
     * @var TaxCalculated
     */
    private $taxExclusive = [];

    /**
     * @var TaxCalculated
     */
    private $taxExclusiveBeforeDiscount = [];

    /**
     * @var TaxCalculated
     */
    private $taxInclusive = [];

    /**
     * @var TaxCalculated
     */
    private $taxInclusiveBeforeDiscount = [];

    /**
     * @return TaxCalculated
     */
    public function getTaxExclusive()
    {
        return $this->taxExclusive;
    }

    /**
     * @param TaxCalculated $taxExclusive
     */
    public function setTaxExclusive($taxExclusive)
    {
        $this->taxExclusive = $taxExclusive;
    }

    /**
     * @return TaxCalculated
     */
    public function getTaxExclusiveBeforeDiscount()
    {
        return $this->taxExclusiveBeforeDiscount;
    }

    /**
     * @param TaxCalculated $taxExclusiveBeforeDiscount
     */
    public function setTaxExclusiveBeforeDiscount($taxExclusiveBeforeDiscount)
    {
        $this->taxExclusiveBeforeDiscount = $taxExclusiveBeforeDiscount;
    }

    /**
     * @return TaxCalculated
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * @param TaxCalculated $taxInclusive
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;
    }

    /**
     * @return TaxCalculated
     */
    public function getTaxInclusiveBeforeDiscount()
    {
        return $this->taxInclusiveBeforeDiscount;
    }

    /**
     * @param TaxCalculated $taxInclusiveBeforeDiscount
     */
    public function setTaxInclusiveBeforeDiscount($taxInclusiveBeforeDiscount)
    {
        $this->taxInclusiveBeforeDiscount = $taxInclusiveBeforeDiscount;
    }
}
