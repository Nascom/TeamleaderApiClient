<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PaymentTerm
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class PaymentTerm
{
    /**
     * @var string
     */
    private $type;

    /**
     * PaymentTerm constructor.
     *
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
