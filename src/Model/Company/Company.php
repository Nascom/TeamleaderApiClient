<?php

namespace Nascom\TeamleaderApiClient\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Aggregate\Addresses;

/**
 * Class Company
 * @package Nascom\TeamleaderApiClient\Model\Company
 */
class Company extends CompanyBase
{
    /**
     * @var Addresses
     */
    private $addresses = [];

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var array
     */
    private $customFields = [];

    /**
     * @var boolean
     */
    private $marketingMailsConsent;

    /**
     * @return Addresses
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param array $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
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
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * @return bool
     */
    public function isMarketingMailsConsent()
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
}
