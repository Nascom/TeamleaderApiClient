<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Tax
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Tax
{
    /**
     * @var float
     */
    private $rate;

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}
