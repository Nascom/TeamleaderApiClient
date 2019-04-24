<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesDeleteRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesDeleteRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesDeleteRequest constructor.
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
        return 'invoices.delete';
    }
}
