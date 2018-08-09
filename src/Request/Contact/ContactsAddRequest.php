<?php
namespace Nascom\TeamleaderApiClient\Request\Contact;

use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Nascom\TeamleaderApiClient\Attributes\ContactFilter;
use Nascom\TeamleaderApiClient\Attributes\Page;
use Nascom\TeamleaderApiClient\Attributes\Sort;
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
        $this->setFirstName($contact->getFirstName());
        $this->setFirstName($contact->getFirstName());
        $this->setLastName($contact->getLastName());
        $this->setEmails($contact->getEmails());
        $this->setSalutation($contact->getSalutation());
        $this->setTelephones($contact->getTelephones());
        $this->setWebsite($contact->getWebsite());
        $this->setAddresses($contact->getAddresses());
        $this->setLanguage($contact->getLanguage());
        $this->setGender($contact->getGender());
        $this->setBirthDate($contact->getBirthDate());
        $this->setIban($contact->getIban());
        $this->setBic($contact->getBic());
        $this->setRemarks($contact->getRemarks());
        $this->setTags($contact->getTags());
        $this->setCustomFields($contact->getCustomFields());
        $this->setMarketingMailsConsent($contact->getMarketingMailsConsent());
    }


    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->requestBody['first_name'] = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
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
    public function setSalutation(string $salutation)
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
    public function setWebsite(string $website)
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
    public function setLanguage(string $language)
    {
        $this->requestBody['language'] = $language;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender)
    {
        $this->requestBody['gender'] = $gender;
    }

    /**
     * @param string $birthdate format yyyy-dd-mm
     */
    public function setBirthDate(string $birthdate)
    {
        $this->requestBody['birthdate'] = $birthdate;
    }

    /**
     * @param string $iban
     */
    public function setIban(string $iban)
    {
        $this->requestBody['iban'] = $iban;
    }

    /**
     * @param string $bic
     */
    public function setBic(string $bic)
    {
        $this->requestBody['bic'] = $bic;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks(string $remarks)
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
    public function  setMarketingMailsConsent(bool $marketingMailsConsent)
    {
        $this->requestBody['marketing_mails_consent'] = $marketingMailsConsent;
    }

}
