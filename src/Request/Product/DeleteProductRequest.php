<?php

namespace Nascom\TeamleaderApiClient\Request\Product;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class DeleteProductRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Product
 */
class DeleteProductRequest extends AbstractPostRequest
{
    /**
     * DeleteProductRequest constructor.
     *
     * @param $product_id
     * @param array $options
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
        return 'deleteProduct.php';
    }
}
