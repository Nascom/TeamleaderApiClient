<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\WithholdingTaxRate\WithholdingTaxRateListView;
use Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates\WithholdingTaxRatesListRequest;

/**
 * Class WithholdingTaxRateRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WithholdingTaxRateRepository extends RepositoryBase
{
    /**
     * @param array $filters
     *
     * @return WithholdingTaxRateListView[]
     * @throws \Http\Client\Exception
     */
    public function listWithholdingTaxRates(array $filters = [])
    {
        $request = new WithholdingTaxRatesListRequest();
        $request->setFilters($filters);

        return $this->handleRequest(
            $request,
            WithholdingTaxRateListView::class . '[]'
        );
    }
}
