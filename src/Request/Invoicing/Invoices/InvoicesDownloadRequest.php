<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesDownloadRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesDownloadRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesDownloadRequest constructor.
     *
     * @param string $id
     * @param string $format
     */
    public function __construct($id, $format)
    {
        $this->body['id'] = $id;
        $this->body['format'] = $format;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'invoices.download';
    }
}
