<?php

namespace Nascom\TeamleaderApiClient\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;

/**
 * Class Contact
 *
 * @package Nascom\TeamleaderApiClient\Request\Contact
 */
class Contact extends ContactBase
{
    /**
     * @var string
     */
    private $remarks;

    /**
     * @var bool
     */
    private $marketingMailsConsent;

    /**
     * @var array
     * @todo
     */
    private $companies = [];

    /**
     * @var AddressWithType[]
     */
    private $addresses = [];

    /**
     * @var array
     * @todo
     */
    private $customFields = [];

    /**
     * @param string $lastName
     * @return Contact
     */
    public static function create($lastName)
    {
        $contact = new static;
        $contact->setLastName($lastName);

        return $contact;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * @return bool
     */
    public function hasMarketingMailsConsent()
    {
        return $this->marketingMailsConsent;
    }

    /**
     * @param bool $marketingMailsConsent
     */
    public function setMarketingMailsConsent($marketingMailsConsent)
    {
        $this->marketingMailsConsent = $marketingMailsConsent;
    }

    /**
     * @return AddressWithType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param AddressWithType[] $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }
}
