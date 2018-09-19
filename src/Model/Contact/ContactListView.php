<?php

namespace Nascom\TeamleaderApiClient\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;

/**
 * Class ContactListView
 *
 * @package Nascom\TeamleaderApiClient\Model
 */
class ContactListView extends ContactBase
{
    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var Address|null
     */
    private $primaryAddress;

    /**
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address|null $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return Address|null
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * @param Address|null $primaryAddress
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->primaryAddress = $primaryAddress;
    }
}
