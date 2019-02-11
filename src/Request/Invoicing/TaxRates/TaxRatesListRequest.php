<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\TaxRates;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class TaxRatesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\TaxRates
 */
class TaxRatesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'taxRates.list';
    }
}
