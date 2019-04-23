<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\TaxRate\TaxRateListView;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Sort\SortInterface;
use Nascom\TeamleaderApiClient\Request\Invoicing\TaxRates\TaxRatesListRequest;

/**
 * Class TaxRateRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class TaxRateRepository extends RepositoryBase
{
    /**
     * @param array $filters
     * @param array $page
     * @param array $sort
     *
     * @return TaxRateListView[]
     * @throws \Http\Client\Exception
     */
    public function listTaxRates(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new TaxRatesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setSort($sort);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            TaxRateListView::class . '[]'
        );
    }
}
