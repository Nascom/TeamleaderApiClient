<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class InvoicesInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesInfoRequest constructor.
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
        return 'invoices.info';
    }
}
