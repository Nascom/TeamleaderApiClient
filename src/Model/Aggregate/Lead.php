<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Lead
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Lead
{
    /**
     * @var LinkedCustomer
     */
    private $customer;

    /**
     * @var LinkedContact
     */
    private $contactPerson;

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
     * @return LinkedContact
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param LinkedContact $contactPerson
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }
}
