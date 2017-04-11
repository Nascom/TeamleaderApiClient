<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateInvoiceRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class UpdateInvoiceRequest extends AbstractPostRequest
{
    /**
     * UpdateInvoiceRequest constructor.
     *
     * @param $invoice_id
     * @param array $options
     *   Optional parameters:
     *   - price_1
     *   - amount_1
     *   - vat_1
     *   - product_id_1
     *   - account_1
     *   - subtitle_1
     *
     *   - description_2
     *   - price_2
     *   - custom_field_ID
     *   - ...
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
        return 'updateInvoice.php';
    }
}
