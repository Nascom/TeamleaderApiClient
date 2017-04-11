<?php

namespace Nascom\TeamleaderApiClient\Request\Product;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateProductRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Product
 */
class UpdateProductRequest extends AbstractPostRequest
{
    /**
     * UpdateProductRequest constructor.
     *
     * @param $product_id
     * @param array $options
     *   Optional parameters:
     *   - name
     *   - price
     *   - external_id
     *   - stock_amount
     *   - purchase_price
     *   - custom_field_ID
     */
    public function __construct($product_id, array $options = [])
    {
        $this->options = $options;
        $this->setProductId($product_id);
    }

    /**
     * @param $product_id
     */
    public function setProductId($product_id)
    {
        $this->options['product_id'] = $product_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'updateProduct.php';
    }
}
