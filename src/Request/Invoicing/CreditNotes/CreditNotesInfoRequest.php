<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class CreditNotesInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes
 */
class CreditNotesInfoRequest extends GetRequest
{
    /**
     * CreditNotesInfoRequest constructor.
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
        return 'creditNotes.info';
    }
}
