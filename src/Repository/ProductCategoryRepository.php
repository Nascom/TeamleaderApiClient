<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\ProductCategory\ProductCategoryListView;
use Nascom\TeamleaderApiClient\Request\Products\ProductCategories\ProductCategoriesListRequest;

/**
 * Class ProductCategoryRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class ProductCategoryRepository extends RepositoryBase
{
    /**
     * @param array $filters
     *
     * @return ProductCategoryListView[]
     * @throws \Http\Client\Exception
     */
    public function listProductCategories(array $filters = [])
    {
        $request = new ProductCategoriesListRequest();
        $request->setFilters($filters);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            ProductCategoryListView::class . '[]'
        );
    }
}
