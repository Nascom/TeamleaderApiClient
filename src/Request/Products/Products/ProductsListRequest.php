<?php

namespace Nascom\TeamleaderApiClient\Request\Products\Products;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ProductsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Products\Products
 */
class ProductsListRequest extends GetRequest implements FilterInterface
{
    use MultipleMethodsTrait, FilterTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'products.list';
    }
}
