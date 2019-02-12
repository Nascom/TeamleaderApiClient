<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\PaymentTerms;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class PaymentTermsListRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\PaymentTerms
 */
class PaymentTermsListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'paymentTerms.list';
    }
}
