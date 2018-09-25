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
    private $primaryAddress;

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
