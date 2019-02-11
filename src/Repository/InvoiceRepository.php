<?php

namespace Nascom\TeamleaderApiClient\Repository;

use function GuzzleHttp\Psr7\normalize_header;
use Nascom\TeamleaderApiClient\Model\Aggregate\Discount;
use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedInvoice;
use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\Aggregate\Invoicee;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedInvoice;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Invoice\Invoice;
use Nascom\TeamleaderApiClient\Model\Invoice\InvoiceListView;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesBookRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesCopyRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDownloadRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDraftRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesInfoRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesListRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesUpdateRequest;

/**
 * Class InvoiceRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class InvoiceRepository extends RepositoryBase
{
    /**
     * @param string $id
     * @return Invoice
     * @throws \Http\Client\Exception
     */
    public function getInvoice($id)
    {
        return $this->handleRequest
        (
            new InvoicesInfoRequest($id),
            Invoice::class
        );
    }

    /**
     * @return InvoiceListView
     * @throws \Http\Client\Exception
     */
    public function listInvoices()
    {
        return $this->handleRequest(
            new InvoicesListRequest(),
            InvoiceListView::class.'[]'
        );
    }

    /**
     * @param string $id
     * @param string $format
     * @return DownloadedInvoice
     * @throws \Http\Client\Exception
     */
    public function downloadInvoice($id, $format)
    {
        return $this->handleRequest(
            new InvoicesDownloadRequest($id, $format),
            DownloadedInvoice::class
        );
    }

    /**
     * @param Invoice $invoice
     * @return LinkedInvoice
     * @throws \Http\Client\Exception
     */
    public function draftInvoice(Invoice $invoice)
    {
        return $this->handleRequest(
            new InvoicesDraftRequest($this->normalize($invoice)),
            LinkedInvoice::class
        );
    }

    /**
     * @param Invoice $invoice
     * @throws \Http\Client\Exception
     */
    public function updateInvoice(Invoice $invoice)
    {
        $this->apiClient->handle(new InvoicesUpdateRequest($this->normalize($invoice)));
    }

    /**
     * @param string $id
     * @return LinkedInvoice
     * @throws \Http\Client\Exception
     */
    public function copyInvoice($id) {
        return $this->handleRequest(new InvoicesCopyRequest($id), LinkedInvoice::class);
    }

    /**
     * @param string $id
     * @param string $on
     * @throws \Http\Client\Exception
     */
    public function bookInvoice($id, $on) {
        $this->apiClient->handle(new InvoicesBookRequest($id, $on));
    }

    // TODO delete, registerPayment
}
