<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class EstimatedValue
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class EstimatedValue
{
    /**
     * @var double
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

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
}
