<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesCopyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesCopyRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesCopyRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'invoices.copy';
    }
}
