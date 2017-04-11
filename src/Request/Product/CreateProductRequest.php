<?php

namespace Nascom\TeamleaderApiClient\Request\Product;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateProductRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Product
 */
class CreateProductRequest extends AbstractPostRequest
{
    /**
     * CreateProductRequest constructor.
     *
     * @param $name
     * @param $price
     * @param array $options
     *   Optional parameters:
     *   - external_id
     *   - vat
     *   - stock_amount
     *   - account_id
     *   - automerge_by_name
     *   - purchase_price
     *   - custom_field_ID
     */
    public function __construct($name, $price, array $options = [])
    {
        $this->options = $options;
        $this->setName($name);
        $this->setPrice($price);
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->options['name'] = $name;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->options['price'] = $price;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addProduct.php';
    }
}
