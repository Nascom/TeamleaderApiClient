<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedInvoice;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedInvoice;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;
use Nascom\TeamleaderApiClient\Model\Invoice\Invoice;
use Nascom\TeamleaderApiClient\Model\Invoice\InvoiceListView;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesBookRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesCopyRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDeleteRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDownloadRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesDraftRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesInfoRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesListRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesRegisterPaymentRequest;
use Nascom\TeamleaderApiClient\Request\Invoicing\Invoices\InvoicesUpdateRequest;

/**
 * Class InvoiceRepository
 *
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
        $request = new InvoicesInfoRequest($id);

        return $this->handleRequest
        (
            $request,
            Invoice::class
        );
    }

    /**
     * @return InvoiceListView[]
     * @throws \Http\Client\Exception
     */
    public function listInvoices()
    {
        $request = new InvoicesListRequest();

        return $this->handleRequest(
            $request,
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
        $request = new InvoicesDownloadRequest($id, $format);

        return $this->handleRequest(
            $request,
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
        $request = new InvoicesDraftRequest($this->normalize($invoice));

        return $this->handleRequest(
            $request,
            LinkedInvoice::class
        );
    }

    /**
     * @param Invoice $invoice
     * @throws \Http\Client\Exception
     */
    public function updateInvoice(Invoice $invoice)
    {
        $request = new InvoicesUpdateRequest($this->normalize($invoice));

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @return LinkedInvoice
     * @throws \Http\Client\Exception
     */
    public function copyInvoice($id)
    {
        $request = new InvoicesCopyRequest($id);

        return $this->handleRequest($request, LinkedInvoice::class);
    }

    /**
     * @param string $id
     * @param string $on
     * @throws \Http\Client\Exception
     */
    public function bookInvoice($id, $on)
    {
        $request = new InvoicesBookRequest($id, $on);

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function deleteInvoice($id)
    {
        $request = new InvoicesDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param PaymentWithDate $paymentWithDate
     * @throws \Http\Client\Exception
     */
    public function registerPayment($id, PaymentWithDate $paymentWithDate)
    {
        $request = new InvoicesRegisterPaymentRequest($id, $this->normalize($paymentWithDate));

        $this->apiClient->handle($request);
    }
}
