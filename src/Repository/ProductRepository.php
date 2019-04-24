<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Product\ProductListView;
use Nascom\TeamleaderApiClient\Request\Products\Products\ProductsListRequest;

/**
 * Class ProductRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class ProductRepository extends RepositoryBase
{
    /**
     * @param array $filters
     *
     * @return ProductListView[]
     * @throws \Http\Client\Exception
     */
    public function listProducts(array $filters = [])
    {
        $request = new ProductsListRequest();
        $request->setFilters($filters);

        return $this->handleRequest(
            $request,
            ProductListView::class . '[]'
        );
    }
}
