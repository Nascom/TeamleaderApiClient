<?php

namespace Nascom\TeamleaderApiClient\Request\Products\ProductCategories;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProductCategoriesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Products\ProductCategories
 */
class ProductCategoriesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'productCategories.list';
    }
}
