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
     * @var Address
     */
    private $primaryAddress;

    /**
     * @return Address
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * @param Address $primaryAddress
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->primaryAddress = $primaryAddress;
    }
}
