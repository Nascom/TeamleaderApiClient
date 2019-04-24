<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Product;

use Nascom\TeamleaderApiClient\Model\Product\ProductListView;

/**
 * Class ProductListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Product
 */
class ProductListViewFieldDescription extends ProductFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return ProductListView::class;
    }
}
