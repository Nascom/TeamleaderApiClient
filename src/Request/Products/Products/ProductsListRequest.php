<?php

namespace Nascom\TeamleaderApiClient\Request\Products\Products;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class ProductsListRequest
 * @package Nascom\TeamleaderApiClient\Request\Products\Products
 */
class ProductsListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'products.list';
    }
}
