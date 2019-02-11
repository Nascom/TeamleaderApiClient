<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoiceeBase
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
abstract class InvoiceeBase
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
    private $customer = [];

    /**
     * @var ContactWithName
     */
    private $forAttentionOf = [];

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

    /**
     * @return ContactWithName
     */
    public function getForAttentionOf()
    {
        return $this->forAttentionOf;
    }

    /**
     * @param ContactWithName $forAttentionOf
     */
    public function setForAttentionOf($forAttentionOf)
    {
        $this->forAttentionOf = $forAttentionOf;
    }
}
