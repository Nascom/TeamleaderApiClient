<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListInvoiceReminderTemplatesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class ListInvoiceReminderTemplatesRequest extends AbstractPostRequest
{
    /**
     * ListInvoiceReminderTemplatesRequest constructor.
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
        return 'getInvoiceReminderTemplates.php';
    }
}
