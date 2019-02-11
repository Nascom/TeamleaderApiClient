<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Invoice\InvoiceBase;

/**
 * Class Invoicee
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Invoicee extends InvoiceeBase
{
    /**
     * Invoicee constructor.
     * @param LinkedCustomer|null $linkedCustomer
     * @param ContactWithName|null $contactWithName
     */
    public function __construct
    (
        LinkedCustomer $linkedCustomer = null,
        ContactWithName $contactWithName = null
    ) {
        $this->setCustomer($linkedCustomer);
        $this->setForAttentionOf($contactWithName);
    }
}
