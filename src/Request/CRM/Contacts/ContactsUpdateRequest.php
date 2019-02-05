<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsUpdateRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsUpdateRequest extends PostRequest
{
    /**
     * ContactsUpdateRequest constructor.
     * @param array $contact
     */
    public function __construct(array $contact)
    {
        $this->body = $contact;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.update';
    }
}
