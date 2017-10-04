<?php

namespace Nascom\TeamleaderApiClient\Request\Product;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveProductRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Product
 */
class RetrieveProductRequest extends AbstractPostRequest
{
    /**
     * RetrieveProductRequest constructor.
     *
     * @param $product_id
     * @param array $options
     *   Optional parameters:
     *   - include_all_custom_fields
     *   - include_photos
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
        return 'getProduct.php';
    }
}
