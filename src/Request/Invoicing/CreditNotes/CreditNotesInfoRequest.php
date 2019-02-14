<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CreditNotesInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\CreditNotes
 */
class CreditNotesInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * CreditNotesInfoRequest constructor.
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
        return 'creditNotes.info';
    }
}
