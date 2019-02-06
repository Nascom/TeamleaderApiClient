<?php

namespace Nascom\TeamleaderApiClient\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCompany;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;

/**
 * Class ContactBase
 *
 * @package Nascom\TeamleaderApiClient\Model
 */
abstract class ContactBase
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var Email[]
     */
    private $emails = [];

    /**
     * @var string|null
     */
    private $salutation;

    /**
     * @var Telephone[]
     */
    private $telephones = [];

    /**
     * @var string|null
     */
    private $website;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var \DateTime|null
     */
    private $birthdate;

    /**
     * @var string|null
     */
    private $iban;

    /**
     * @var string|null
     */
    private $bic;

    /**
     * @var string|null
     */
    private $language;

    /**
     * @var PaymentTerm|null
     */
    private $paymentTerm;

    /**
     * @var \DateTime|null
     */
    private $addedAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var string[]
     */
    private $tags;

    /**
     * @var string
     */
    private $webUrl;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param null|string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return Email[]
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param Email[] $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    /**
     * @return null|string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param null|string $salutation
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
    }

    /**
     * @return Telephone[]
     */
    public function getTelephones()
    {
        return $this->telephones;
    }

    /**
     * @param Telephone[] $telephones
     */
    public function setTelephones($telephones)
    {
        $this->telephones = $telephones;
    }

    /**
     * @return null|string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param null|string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return null|string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param null|string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return null|\DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param null|\DateTime $birthdate
     */
    public function setBirthdate(\DateTime $birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return null|string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param null|string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return null|string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param null|string $bic
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    /**
     * @return null|string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param null|string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return PaymentTerm|null
     */
    public function getPaymentTerm()
    {
        return $this->paymentTerm;
    }

    /**
     * @param PaymentTerm|null $paymentTerm
     */
    public function setPaymentTerm($paymentTerm)
    {
        $this->paymentTerm = $paymentTerm;
    }

    /**
     * @return null|\DateTime
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * @param null|\DateTime $addedAt
     */
    public function setAddedAt(\DateTime$addedAt)
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @return null|\DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param null|\DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
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

    /**
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param null|string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
}
