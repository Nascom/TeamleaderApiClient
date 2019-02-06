<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsAddRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsAddRequest extends PostRequest
{
    /**
     * ContactsAddRequest constructor.
     *
     * @param array $contact
     */
    public function __construct(array $contact)
    {
        $this->body = array_filter($contact, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.add';
    }
}
