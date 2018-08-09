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
     * @return Email[]
     */
    public function getEmails()
    {
        $emails = $this->getEntityValue('emails', []);
        if ($emails === []) {
            return null;
        }
        $emailsRet = [];
        foreach ($emails as $email) {
            $emailsRet[] = new Email($email);
        }
        return $emailsRet;
    }

    /**
     * @param Email[] $emails
     */
    public function setEmails($emails)
    {
        $emailsPayload = [];
        foreach ($emails as $email) {
            $emailsPayload[] = $email->getArrayCopy();
        }
        $this->setEntityValue('emails', $emailsPayload);
    }

    /**
     * @return Telephone[]|null
     */
    public function getTelephones()
    {
        $telephones = $this->getEntityValue('telephones', []);
        if ($telephones === []) {
            return null;
        }
        $telephonesRet = [];
        foreach ($telephones as $telephone) {
            $telephonesRet[] = new Telephone($telephone);
        }
        return $telephonesRet;
    }

    /**
     * @param Telephone[] $telephones
     */
    public function setTelephones($telephones)
    {
        $telephonesPayload = [];
        foreach ($telephones as $telephone) {
            $telephonesPayload[] = $telephone->getArrayCopy();
        }
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
     * @return Address[]
     * This value is not available when getting a list of contactsm only through
     * contact.info
     */
    public function getAddresses()
    {
        $addresses = $this->getEntityValue('addresses', []);
        if ($addresses === []) {
            return null;
        }
        $addressesRet = [];
        foreach ($addresses as $address) {
            $addressesRet[] = new Address($address);
        }
        return $addressesRet;
    }

    /**
     * @param Address[] $addresses
     */
    public function setAddresses($addresses)
    {
        $addressesPayload = [];
        foreach ($addresses as $address) {
            $addressesPayload[] = $address->getArrayCopy();
        }
        $this->setEntityValue('addresses', $addressesPayload);
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
    public function getCompanies()
    {
        return $this->getEntityValue('companies', '');
    }

    /**
     * @param string $companies
     */
    public function setCompanies($companies)
    {
        $this->setEntityValue('companies', $companies);
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
     * @return PaymentTerm|null
     */
    public function getPaymentTerm()
    {
        $paymentTerm = $this->getEntityValue('payment_term', '');
        if ($paymentTerm === '') {
            return null;
        }
        return new PaymentTerm($paymentTerm);
    }

    /**
     * @param PaymentTerm $payment_term
     */
    public function setPaymentTerm(PaymentTerm $payment_term)
    {
        $this->setEntityValue('payment_term', $payment_term->getArrayCopy());
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
     * @return boolean|null
     */
    public function getMarketingMailsConsent()
    {
        return $this->getEntityValue('marketing_mails_consent', null);
    }

    /**
     * @param boolean $marketingMailsConsent
     */
    public function setMarketingMailsConsent($marketingMailsConsent) {
        $this->setEntityValue('marketing_mails_consent', $marketingMailsConsent);
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
     * Only available through contact.list
     * @return Address|null
     */
    public function getPrimaryAddress()
    {
        $primaryAddress = $this->getEntityValue('primary_address', '');
        if ($primaryAddress === '') {
            return null;
        }
        return new Address($primaryAddress);
    }

    /**
     * @param Address $primaryAddress
     */
    public function setPrimaryAddress(Address $primaryAddress)
    {
        $this->setEntityValue('primary_address', $primaryAddress->getArrayCopy());
    }

}
