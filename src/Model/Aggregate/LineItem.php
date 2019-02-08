<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class LineItem
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class LineItem
{
    /**
     * @var LinkedProduct
     */
    private $product = [];

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $extendedDescription;

    /**
     * @var UnitPrice
     */
    private $unitPrice = [];

    /**
     * @var Tax
     */
    private $tax = [];

    /**
     * @var Discount
     */
    private $discount = [];

    /**
     * @var Total
     */
    private $total = [];

    /**
     * @return LinkedProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param LinkedProduct $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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

    /**
     * @return string
     */
    public function getExtendedDescription()
    {
        return $this->extendedDescription;
    }

    /**
     * @param string $extendedDescription
     */
    public function setExtendedDescription($extendedDescription)
    {
        $this->extendedDescription = $extendedDescription;
    }

    /**
     * @return UnitPrice
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param UnitPrice $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return Tax
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param Tax $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return Discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param Discount $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return Total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param Total $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
}
