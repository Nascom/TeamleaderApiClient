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
     * @var CalculatedTotal
     */
    private $total = [];

    /**
     * @var string
     */
    private $taxRateId;

    /**
     * @var string
     */
    private $withholdingTaxRateId;

    /**
     * LineItem constructor.
     * @param integer|null $quantity
     * @param string|null $description
     * @param string|null $extendedDescription
     * @param UnitPrice|null $unitPrice
     * @param string|null $taxRateId
     * @param string|null $withholdingTaxRateId
     * @param Discount|null $discount
     * @param LinkedProduct|null $linkedProduct
     */
    public function __construct
    (
        $quantity = null,
        $description = null,
        $extendedDescription = null,
        UnitPrice $unitPrice = null,
        $taxRateId = null,
        $withholdingTaxRateId = null,
        Discount $discount = null,
        LinkedProduct $linkedProduct = null
    ) {
        $this->quantity = $quantity;
        $this->description = $description;
        $this->extendedDescription = $extendedDescription;
        $this->unitPrice = $unitPrice;
        $this->taxRateId = $taxRateId;
        $this->withholdingTaxRateId = $withholdingTaxRateId;
        $this->discount = $discount;
        $this->product = $linkedProduct;
    }

    /**
     * @return string
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * @param string $taxRateId
     */
    public function setTaxRateId($taxRateId)
    {
        $this->taxRateId = $taxRateId;
    }

    /**
     * @return string
     */
    public function getWithholdingTaxRateId()
    {
        return $this->withholdingTaxRateId;
    }

    /**
     * @param string $withholdingTaxRateId
     */
    public function setWithholdingTaxRateId($withholdingTaxRateId)
    {
        $this->withholdingTaxRateId = $withholdingTaxRateId;
    }

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
     * @return CalculatedTotal
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param CalculatedTotal $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
}
