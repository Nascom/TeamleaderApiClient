<?php
namespace Nascom\TeamleaderApiClient\Attributes;

use JsonSerializable;

/**
 * Class Page
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class Page implements JsonSerializable
{

    /**
     * @var int
     */
    protected $size;

    /**
     * @var int
     */
    protected $number;

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'size' => $this->size,
            'number' => $this->number,
        ]);
    }

}
