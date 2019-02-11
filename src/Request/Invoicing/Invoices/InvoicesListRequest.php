<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class InvoicesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'invoices.list';
    }
}
