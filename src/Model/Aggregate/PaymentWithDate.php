<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

use DateTime;

/**
 * Class PaymentWithDate
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class PaymentWithDate
{
    /**
     * @var DateTime
     */
    private $paidAt;

    /**
     * @var PaymentAmount
     */
    private $payment;

    /**
     * PaymentWithDate constructor.
     *
     * @param DateTime|null $paidAt
     * @param PaymentAmount|null $payment
     */
    public function __construct(
        DateTime $paidAt = null,
        PaymentAmount $payment = null
    ) {
        $this->paidAt = $paidAt;
        $this->payment = $payment;
    }

    /**
     * @return DateTime
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }

    /**
     * @param DateTime $paidAt
     */
    public function setPaidAt($paidAt)
    {
        $this->paidAt = $paidAt;
    }

    /**
     * @return PaymentAmount
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param PaymentAmount $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }
}
