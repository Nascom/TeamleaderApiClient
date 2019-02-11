<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class DiscountWithDescription
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class DiscountWithDescription extends Discount
{
    /**
     * @var string
     */
    private $description;

    public function __construct($value = null, $type = null, $description = null)
    {
        parent::__construct($value, $type);
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
