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
     * Discount constructor.
     * @param string|null $value
     * @param string|null $type
     */
    public function __construct
    (
        $value = null,
        $type = null
    ) {
        $this->value = $value;
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
