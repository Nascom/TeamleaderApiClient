<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListSubscriptionsRelatedToInvoiceRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class ListSubscriptionsRelatedToInvoiceRequest extends AbstractPostRequest
{
    /**
     * ListSubscriptionsRelatedToInvoiceRequest constructor.
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
        return 'getRelatedSubscriptionsByInvoice.php';
    }
}
