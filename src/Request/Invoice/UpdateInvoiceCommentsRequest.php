<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateInvoiceCommentsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class UpdateInvoiceCommentsRequest extends AbstractPostRequest
{
    /**
     * UpdateInvoiceCommentsRequest constructor.
     *
     * @param $invoice_id
     * @param $comments
     * @param array $options
     */
    public function __construct($invoice_id, $comments, array $options = [])
    {
        $this->options = $options;
        $this->setInvoiceId($invoice_id);
        $this->setComments($comments);
    }

    /**
     * @param $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->options['invoice_id'] = $invoice_id;
    }

    /**
     * @param $comments
     */
    public function setComments($comments)
    {
        $this->options['comments'] = $comments;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'updateInvoiceComments.php';
    }
}
