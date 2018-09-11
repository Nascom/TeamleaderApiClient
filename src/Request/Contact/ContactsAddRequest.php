<?php
namespace Nascom\TeamleaderApiClient\Request\Contact;

use Http\Discovery\MessageFactoryDiscovery;
use Nascom\TeamleaderApiClient\Entity\Contact;
use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Request\AbstractRequest;

/**
 * Class ContactsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
class ContactsAddRequest extends AbstractRequest
{
    /**
     * ContactsListRequest constructor.
     */
    public function __construct(Contact $contact)
    {
        $this->setUri(ApiClient::BASE_API_URL . 'contacts.add');
        $this->request = MessageFactoryDiscovery::find()->createRequest('POST',  $this->uri);
        // Required fields.
        $this->setLastName($contact->getLastName());

        // Optional fields.
        if (!empty($contact->getFirstName())) {
          $this->setFirstName($contact->getFirstName());
        }
        if ($contact->getEmails()) {
          $this->setEmails($contact->getEmails());
        }
        if (!empty($contact->getSalutation())) {
          $this->setSalutation($contact->getSalutation());
        }
        if ($contact->getTelephones()) {
          $this->setTelephones($contact->getTelephones());
        }
        if (!empty($contact->getWebsite())) {
          $this->setWebsite($contact->getWebsite());
        }
        if ($contact->getAddresses()) {
          $this->setAddresses($contact->getAddresses());
        }
        if ($contact->getLanguage()) {
          $this->setLanguage($contact->getLanguage());
        }
        if (!empty($contact->getGender())) {
          $this->setGender($contact->getGender());
        }
        if (!empty($contact->getBirthDate())) {
          $this->setBirthDate($contact->getBirthDate());
        }
        if (!empty($contact->getIban())) {
          $this->setIban($contact->getIban());
        }
        if (!empty($contact->getBic())) {
          $this->setBic($contact->getBic());
        }
        if (!empty($contact->getRemarks())) {
          $this->setRemarks($contact->getRemarks());
        }
        if (!empty($contact->getTags())) {
          $this->setTags($contact->getTags());
        }
        if (!empty($contact->getCustomFields())) {
          $this->setCustomFields($contact->getCustomFields());
        }
        if ($contact->getMarketingMailsConsent()) {
          $this->setMarketingMailsConsent($contact->getMarketingMailsConsent());
        }
    }


    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->requestBody['first_name'] = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->requestBody['last_name'] = $lastName;
    }

    /**
     * @param array $emails
     */
    public function setEmails(array $emails)
    {
        $this->requestBody['emails'] = $emails;
    }

    /**
     * @param string $salutation
     */
    public function setSalutation($salutation)
    {
        $this->requestBody['salutation'] = $salutation;
    }

    /**
     * @param array $telephones
     */
    public function setTelephones(array $telephones)
    {
        $this->requestBody['telephones'] = $telephones;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->requestBody['website'] = $website;
    }

    /**
     * @param array $addresses
     */
    public function setAddresses(array $addresses)
    {
        $this->requestBody['addresses'] = $addresses;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->requestBody['language'] = $language;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->requestBody['gender'] = $gender;
    }

    /**
     * @param string $birthdate format yyyy-dd-mm
     */
    public function setBirthDate($birthdate)
    {
        $this->requestBody['birthdate'] = $birthdate;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->requestBody['iban'] = $iban;
    }

    /**
     * @param string $bic
     */
    public function setBic($bic)
    {
        $this->requestBody['bic'] = $bic;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks($remarks)
    {
        $this->requestBody['remarks'] = $remarks;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags)
    {
        $this->requestBody['tags'] = $tags;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields(array $customFields)
    {
        $this->requestBody['custom_fields'] = $customFields;
    }

    /**
     * @param boolean $marketingMailsConsent
     */
    public function  setMarketingMailsConsent($marketingMailsConsent)
    {
        $this->requestBody['marketing_mails_consent'] = $marketingMailsConsent;
    }

}
