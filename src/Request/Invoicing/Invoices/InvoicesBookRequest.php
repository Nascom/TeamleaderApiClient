<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesBookRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesBookRequest extends PostRequest
{
    /**
     * InvoicesBookRequest constructor.
     * @param string $id
     * @param string $on
     */
    public function __construct($id, $on)
    {
        $this->body['id'] = $id;
        $this->body['on'] = $on;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'invoices.book';
    }
}
