<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class WithholdingTaxRatesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates
 */
class WithholdingTaxRatesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'withholdingTaxRates.list';
    }
}
