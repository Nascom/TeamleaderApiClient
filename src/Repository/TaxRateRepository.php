<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\TaxRate\TaxRateListView;
use Nascom\TeamleaderApiClient\Request\Invoicing\TaxRates\TaxRatesListRequest;

/**
 * Class TaxRateRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class TaxRateRepository extends RepositoryBase
{
    /**
     * @return TaxRateListView
     * @throws \Http\Client\Exception
     */
    public function listTaxRates()
    {
        return $this->handleRequest(new TaxRatesListRequest(), TaxRateListView::class.'[]');
    }
}