<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CreditNotesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes
 */
class CreditNotesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'creditNotes.list';
    }
}
