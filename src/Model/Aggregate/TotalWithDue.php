<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class TotalWithDue
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class TotalWithDue extends Total
{
    /**
     * @var PaymentAmount
     */
    private $due;

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
