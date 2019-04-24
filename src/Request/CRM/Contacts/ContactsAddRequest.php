<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsAddRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsAddRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsAddRequest constructor.
     *
     * @param array $contact
     *
     * @throws \Exception
     */
    public function __construct(array $contact)
    {
        unset($contact['web_url']);

        // Strip the time of the birthdate string
        if (isset($contact['birthdate'])) {
            $date = new \DateTime($contact['birthdate']);
            $contact['birthdate'] = $date->format('Y-m-d');
        }

        $this->body = $contact;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.add';
    }
}
