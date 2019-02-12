<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class CreditNotesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes
 */
class CreditNotesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'creditNotes.list';
    }
}
