<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoicingPreference
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class InvoicingPreference
{
    /**
     * @var boolean
     */
    private $electronicInvoicingAddress;

    /**
     * @return bool
     */
    public function getElectronicInvoicingAddress()
    {
        return $this->electronicInvoicingAddress;
    }

    /**
     * @param bool $electronicInvoicingAddress
     */
    public function setElectronicInvoicingAddress($electronicInvoicingAddress)
    {
        $this->electronicInvoicingAddress = $electronicInvoicingAddress;
    }

}
