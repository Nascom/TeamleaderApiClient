<?php

namespace Nascom\TeamleaderApiClient\Request\Invoicing\Invoices;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class InvoicesRegisterPaymentRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoicing\Invoices
 */
class InvoicesRegisterPaymentRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * InvoicesRegisterPaymentRequest constructor.
     *
     * @param string $id
     * @param array $paymentWithDate
     */
    public function __construct($id, array $paymentWithDate)
    {
        $this->body = $paymentWithDate;
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'invoices.registerPayment';
    }
}
