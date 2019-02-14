<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\TaxRates;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class TaxRatesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\TaxRates
 */
class TaxRatesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'taxRates.list';
    }
}
