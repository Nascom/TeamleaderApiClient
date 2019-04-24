<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Telephone
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Telephone
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $type;

    /**
     * Telephone constructor.
     *
     * @param string|null $number
     * @param string|null $type
     */
    public function __construct($number = null, $type = null)
    {
      $this->number = $number;
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
