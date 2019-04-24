<?php

namespace Nascom\TeamleaderApiClient\Request\Products\ProductCategories;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProductCategoriesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Products\ProductCategories
 */
class ProductCategoriesListRequest extends GetRequest implements FilterInterface
{
    use MultipleMethodsTrait, FilterTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'productCategories.list';
    }
}
