<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesDraftRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesDraftRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesDraftRequest constructor.
     *
     * @param array $invoice
     */
    public function __construct(array $invoice) {
        $invoice['department_id'] = $invoice['department']['id'];

        unset(
            $invoice['id'],
            $invoice['invoicee']['name'],
            $invoice['invoicee']['email'],
            $invoice['invoicee']['vat_number'],
            $invoice['total'],
            $invoice['invoice_number'],
            $invoice['payment_reference'],
            $invoice['payments'],
            $invoice['department'],
            $invoice['status'],
            $invoice['due_on'],
            $invoice['paid'],
            $invoice['created_at'],
            $invoice['updated_at']
        );

        foreach ($invoice['grouped_lines'] as $gl => $groupedLine) {
            foreach ($groupedLine['line_items'] as $li => $lineItem) {
                unset($invoice['grouped_lines'][$gl]['line_items'][$li]['tax']);
                unset($invoice['grouped_lines'][$gl]['line_items'][$li]['total']);
            }
        }

        $this->body = $invoice;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'invoices.draft';
    }
}
