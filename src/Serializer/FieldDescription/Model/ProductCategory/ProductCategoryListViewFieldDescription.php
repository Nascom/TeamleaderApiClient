<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ProductCategory;

use Nascom\TeamleaderApiClient\Model\ProductCategory\ProductCategoryListView;

/**
 * Class ProductCategoryListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ProductCategory
 */
class ProductCategoryListViewFieldDescription extends ProductCategoryFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return ProductCategoryListView::class;
    }
}
