<?php

namespace Nascom\TeamleaderApiClient\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\Addresses;
use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Model\Aggregate\CustomField;
use Nascom\TeamleaderApiClient\Model\Aggregate\CustomFieldDefinition;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCompany;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;

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
     * @var Addresses[]
     */
    private $addresses = [];

    /**
     * @var LinkedCustomField|CustomField
     */
    private $customFields = [];

    /**
     * @var LinkedCompany
     */
    private $companies = [];

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

    /**
     * @return LinkedCustomField|CustomField
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param LinkedCustomField|CustomField $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * @return LinkedCompany
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * @param LinkedCompany $companies
     */
    public function setCompanies($companies)
    {
        $this->companies = $companies;
    }
}
