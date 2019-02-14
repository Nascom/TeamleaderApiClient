<?php

namespace Nascom\TeamleaderApiClient\Request\Products\Products;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProductsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Products\Products
 */
class ProductsListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'products.list';
    }
}
