<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class InvoicesInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesInfoRequest extends GetRequest
{
    /**
     * InvoicesInfoRequest constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'invoices.info';
    }
}
