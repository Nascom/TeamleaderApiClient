<?php
namespace Nascom\TeamleaderApiClient\Attributes;

use JsonSerializable;

/**
 * Class Sort
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class Sort implements JsonSerializable
{

    /**
     * @var string
     */
    protected $field;

    /**
     * @var string
     */
    protected $order;

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    public function jsonSerialize()
    {
        return array_filter([
            'field' => $this->field,
            'order' => $this->order,
        ]);
    }
}
