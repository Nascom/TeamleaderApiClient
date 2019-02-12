<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CreditNotesDownloadRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes
 */
class CreditNotesDownloadRequest extends PostRequest
{
    /**
     * CreditNotesDownloadRequest constructor.
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
        return 'creditNotes.download';
    }
}
