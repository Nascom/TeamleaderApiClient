<?php

namespace Nascom\TeamleaderApiClient\Request\Products\ProductCategories;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class ProductCategoriesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Products\ProductCategories
 */
class ProductCategoriesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'productCategories.list';
    }
}
