<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class WithholdingTaxRatesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\WithholdingTaxRates
 */
class WithholdingTaxRatesListRequest extends GetRequest implements FilterInterface
{
    use MultipleMethodsTrait, FilterTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'withholdingTaxRates.list';
    }
}
