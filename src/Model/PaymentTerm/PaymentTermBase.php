<?php

namespace Nascom\TeamleaderApiClient\Model\PaymentTerm;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class PaymentTermBase
 * @package Nascom\TeamleaderApiClient\Model\PaymentTerm
 */
abstract class PaymentTermBase extends ModelBase
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $days;

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

    /**
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param int $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }
}
