<?php
namespace Nascom\TeamleaderApiClient\Entity;

use Nascom\TeamleaderApiClient\Entity\Entity;

/**
 * Class Email
 *
 * @package Nascom\TeamleaderApiClient\Entity
 */
class Contact extends Entity
{

    /**
     * @param array $array
     */
    public function __construct(array $array = [])
    {
        parent::__construct($array);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getEntityValue('id', '');
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->setEntityValue('id', $id);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getEntityValue('first_name', '');
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->setEntityValue('first_name', $first_name);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getEntityValue('last_name', '');
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->setEntityValue('last_name', $last_name);
    }

    /**
     * @return array
     */
    public function getEmails()
    {
        return $this->getEntityValue('emails', []);
    }

    /**
     * @param array $emails
     */
    public function setEmails($emails)
    {
        $this->setEntityValue('emails', $emails);
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
        return $this->getEntityValue('salutation', '');
    }

    /**
     * @param string $salutation
     */
    public function setSalutation($salutation)
    {
        $this->setEntityValue('salutation', $salutation);
    }

    /**
     * @return string
     */
    public function getTelephones()
    {
        return $this->getEntityValue('telephones', []);
    }

    /**
     * @param string $telephones
     */
    public function setTelephones($telephones)
    {
        $this->setEntityValue('telephones', $telephones);
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->getEntityValue('website', '');
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->setEntityValue('website', $website);
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->getEntityValue('gender', '');
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->setEntityValue('gender', $gender);
    }

    /**
     * @return string
     */
    public function getBirthdate()
    {
        return $this->getEntityValue('birthdate', '');
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->setEntityValue('birthdate', $birthdate);
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->getEntityValue('iban', '');
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->setEntityValue('iban', $iban);
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->getEntityValue('bic', '');
    }

    /**
     * @param string $bic
     */
    public function setBic($bic)
    {
        $this->setEntityValue('bic', $bic);
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->getEntityValue('language', '');
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->setEntityValue('language', $language);
    }

    /**
     * @return string
     */
    public function getPaymentTerm()
    {
        return $this->getEntityValue('payment_term', '');
    }

    /**
     * @param string $payment_term
     */
    public function setPaymentTerm($payment_term)
    {
        $this->setEntityValue('payment_term', $payment_term);
    }

    /**
     * @return string
     */
    public function getAddedAt()
    {
        return $this->getEntityValue('added_at', '');
    }

    /**
     * @param string $added_at
     */
    public function setAddedAt($added_at)
    {
        $this->setEntityValue('added_at', $added_at);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getEntityValue('updated_at', '');
    }

    /**
     * @param string $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->setEntityValue('updated_at', $updated_at);
    }

    /**
     * @return array
     */
    public function getAddresses()
    {
        return $this->getEntityValue('addresses', '');
    }

    /**
     * @param array $address
     */
    public function setAddresses($address)
    {
        $this->setEntityValue('addresses', $address);
    }

    /**
     * @return array
     */
    public function getPrimaryAddress()
    {
        return $this->getEntityValue('primary_address', '');
    }

    /**
     * @param array $primary_address
     */
    public function setPrimaryAddress($primary_address)
    {
        $this->setEntityValue('primary_address', $primary_address);
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->getEntityValue('remarks', '');
    }

    /**
     * @param string $remarks
     */
    public function setRemarks($remarks)
    {
        $this->setEntityValue('remarks', $remarks);
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->getEntityValue('tags', []);
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->setEntityValue('tags', $tags);
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->getEntityValue('custom_fields', []);
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields(array $customFields)
    {
        $this->setEntityValue('custom_fields', $customFields);
    }

    /**
     * @return boolean
     */
    public function getMarketingMailsConsent()
    {
        return $this->getEntityValue('marketing_mails_consent', false);
    }

    /**
     * @param boolean $marketingMailsConsent
     */
    public function setMarketingMailsConsent(boolean $marketingMailsConsent) {
        $this->setEntityValue('marketing_mails_consent', $marketingMailsConsent);
    }

}
