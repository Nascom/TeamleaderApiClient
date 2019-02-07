<?php

namespace Nascom\TeamleaderApiClient\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\BusinessType;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\InvoicingPreference;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CompanyBase
 * @package Nascom\TeamleaderApiClient\Model\Company
 */
abstract class CompanyBase extends ModelBase
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var BusinessType
     */
    private $businessType = [];

    /**
     * @var string
     */
    private $vatNumber;

    /**
     * @var string
     */
    private $nationalIdentificationNumber;

    /**
     * @var Email
     */
    private $emails = [];

    /**
     * @var Telephone
     */
    private $telephones = [];

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $bic;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $preferredCurrency;

    /**
     * @var PaymentTerm
     */
    private $paymentTerm = [];

    /**
     * @var InvoicingPreference
     */
    private $invoicingPreferences;

    /**
     * @var Account
     */
    private $responsibleUser = [];

    /**
     * @var string
     */
    private $addedAt;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $webUrl;

    /**
     * @var string[]
     */
    private $tags;

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
     * @return BusinessType
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param BusinessType $businessType
     */
    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
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
     * @return string
     */
    public function getNationalIdentificationNumber()
    {
        return $this->nationalIdentificationNumber;
    }

    /**
     * @param string $nationalIdentificationNumber
     */
    public function setNationalIdentificationNumber($nationalIdentificationNumber)
    {
        $this->nationalIdentificationNumber = $nationalIdentificationNumber;
    }

    /**
     * @return Email
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param Email $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    /**
     * @return Telephone
     */
    public function getTelephones()
    {
        return $this->telephones;
    }

    /**
     * @param Telephone $telephones
     */
    public function setTelephones($telephones)
    {
        $this->telephones = $telephones;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getPreferredCurrency()
    {
        return $this->preferredCurrency;
    }

    /**
     * @param string $preferredCurrency
     */
    public function setPreferredCurrency($preferredCurrency)
    {
        $this->preferredCurrency = $preferredCurrency;
    }

    /**
     * @return PaymentTerm
     */
    public function getPaymentTerm()
    {
        return $this->paymentTerm;
    }

    /**
     * @param PaymentTerm $paymentTerm
     */
    public function setPaymentTerm($paymentTerm)
    {
        $this->paymentTerm = $paymentTerm;
    }

    /**
     * @return InvoicingPreference
     */
    public function getInvoicingPreferences()
    {
        return $this->invoicingPreferences;
    }

    /**
     * @param InvoicingPreference $invoicingPreferences
     */
    public function setInvoicingPreferences($invoicingPreferences)
    {
        $this->invoicingPreferences = $invoicingPreferences;
    }

    /**
     * @return Account
     */
    public function getResponsibleUser()
    {
        return $this->responsibleUser;
    }

    /**
     * @param Account $responsibleUser
     */
    public function setResponsibleUser($responsibleUser)
    {
        $this->responsibleUser = $responsibleUser;
    }

    /**
     * @return string
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * @param string $addedAt
     */
    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }

    /**
     * @param string $webUrl
     */
    public function setWebUrl($webUrl)
    {
        $this->webUrl = $webUrl;
    }

    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
}
