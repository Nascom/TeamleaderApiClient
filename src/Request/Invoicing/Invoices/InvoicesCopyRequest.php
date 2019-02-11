<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesCopyRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesCopyRequest extends PostRequest
{
    /**
     * InvoicesCopyRequest constructor.
     * @param string $id
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
        return 'invoices.copy';
    }
}
