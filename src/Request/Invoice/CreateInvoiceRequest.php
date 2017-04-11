<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateInvoiceRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class CreateInvoiceRequest extends AbstractPostRequest
{
    /**
     * CreateInvoiceRequest constructor.
     *
     * @param $invoice_id
     * @param array $options
     *   Extra parameters for invoice lines (required):
     *   - description_1
     *   - price_1
     *   - amount_1
     *   - vat_1
     *   - product_id_1
     *   - account_1
     *   - subtitle_1
     *
     *   - description_2
     *   - price_2
     *   - ...
     *   - custom_field_ID
     *
     *   Optional POST parameters
     *   - for_attention_of
     *   - payment_term
     *   - draft_invoice
     *   - layout_id
     *   - date
     *   - po_number
     *   - related_deal_id
     *   - direct_debit
     *   - comments
     *   - force_set_number
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
        return 'addInvoice.php';
    }
}
