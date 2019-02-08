<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Discount
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Discount
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $value;

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
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
