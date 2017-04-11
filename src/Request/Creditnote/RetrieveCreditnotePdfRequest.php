<?php

namespace Nascom\TeamleaderApiClient\Request\Creditnote;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveCreditnotePdfRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Creditnote
 */
class RetrieveCreditnotePdfRequest extends AbstractPostRequest
{
    /**
     * RetrieveCreditnotePdfRequest constructor.
     *
     * @param $invoice_id
     * @param array $options
     */
    public function __construct($invoice_id, array $options = [])
    {
        $this->options = $options;
        $this->setInvoiceId($invoice_id);
    }

    /**
     * @param $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->options['invoice_id'] = $invoice_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'downloadCreditnotePDF.php';
    }
}
