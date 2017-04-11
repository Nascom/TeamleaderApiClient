<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class SendInvoiceReminderRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class SendInvoiceReminderRequest extends AbstractPostRequest
{
    /**
     * SendInvoiceReminderRequest constructor.
     *
     * @param $invoice_id
     * @param $email_to
     * @param $email_subject
     * @param $email_text
     * @param array $options
     *   Optional parameters:
     *   - attachment_filename_1
     *   - attachment_base64_content_1
     *
     *   - attachment_filename_2
     *   - attachment_base64_content_2
     */
    public function __construct($invoice_id, $email_to, $email_subject, $email_text, array $options = [])
    {
        $this->options = $options;
        $this->setInvoiceId($invoice_id);
        $this->setEmailTo($email_to);
        $this->setEmailSubject($email_subject);
        $this->setEmailText($email_text);
    }

    /**
     * @param $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->options['invoice_id'] = $invoice_id;
    }

    /**
     * @param $email_to
     */
    public function setEmailTo($email_to)
    {
        $this->options['email_to'] = $email_to;
    }

    /**
     * @param $email_subject
     */
    public function setEmailSubject($email_subject)
    {
        $this->options['email_subject'] = $email_subject;
    }

    /**
     * @param $email_text
     */
    public function setEmailText($email_text)
    {
        $this->options['email_text'] = $email_text;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'sendInvoice.php';
    }
}
