<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\PaymentTerms;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class PaymentTermsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\PaymentTerms
 */
class PaymentTermsListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'paymentTerms.list';
    }
}
