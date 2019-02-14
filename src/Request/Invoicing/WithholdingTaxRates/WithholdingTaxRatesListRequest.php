<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class WithholdingTaxRatesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates
 */
class WithholdingTaxRatesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'withholdingTaxRates.list';
    }
}
