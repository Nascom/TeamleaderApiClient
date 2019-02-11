<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class UnitPrice
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class UnitPrice
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $tax;

    /**
     * UnitPrice constructor.
     * @param float|null $amount
     * @param string|null $currency
     * @param string|null $tax
     */
    public function __construct
    (
        $amount = null,
        $currency = null,
        $tax = null
    ) {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->tax = $tax;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param string $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }
}
