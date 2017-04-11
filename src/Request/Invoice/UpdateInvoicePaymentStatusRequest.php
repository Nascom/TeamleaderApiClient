<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateInvoicePaymentStatusRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class UpdateInvoicePaymentStatusRequest extends AbstractPostRequest
{
    /**
     * UpdateInvoicePaymentStatusRequest constructor.
     *
     * @param $invoice_id
     * @param $status
     * @param array $options
     */
    public function __construct($invoice_id, $status, array $options = [])
    {
        $this->options = $options;
        $this->setInvoiceId($invoice_id);
        $this->setStatus($status);
    }

    /**
     * @param $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->options['invoice_id'] = $invoice_id;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->options['status'] = $status;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'setInvoicePaymentStatus.php';
    }
}
