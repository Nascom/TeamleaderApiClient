<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoiceeMinimal
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class InvoiceeMinimal
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $vatNumber;

    /**
     * @var LinkedCustomer
     */
    private $customer;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return LinkedCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param LinkedCustomer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
}
