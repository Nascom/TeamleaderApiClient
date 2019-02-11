<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesDownloadRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesDownloadRequest extends PostRequest
{
    /**
     * InvoicesDownloadRequest constructor.
     * @param string $id
     * @param string $format
     */
    public function __construct($id, $format)
    {
        $this->body['id'] = $id;
        $this->body['format'] = $format;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'invoices.download';
    }
}
