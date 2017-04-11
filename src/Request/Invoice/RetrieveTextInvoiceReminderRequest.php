<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveTextInvoiceReminderRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class RetrieveTextInvoiceReminderRequest extends AbstractPostRequest
{
    /**
     * RetrieveTextInvoiceReminderRequest constructor.
     *
     * @param $invoice_id
     * @param $template_id
     * @param array $options
     */
    public function __construct($invoice_id, $template_id, array $options = [])
    {
        $this->options = $options;
        $this->setInvoiceId($invoice_id);
        $this->setTemplateId($template_id);
    }

    /**
     * @param $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->options['invoice_id'] = $invoice_id;
    }

    /**
     * @param $template_id
     */
    public function setTemplateId($template_id)
    {
        $this->options['template_id'] = $template_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getInvoiceReminderTemplateContent.php';
    }
}
