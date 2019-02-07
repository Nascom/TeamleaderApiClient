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
        unset($contact['added_at']);
        unset($contact['updated_at']);

        $customFields = $contact['custom_fields'];
        $contact['custom_fields'] = [];

        foreach ($customFields as $field) {
            if (isset($field['value'])) {
                $contact['custom_fields'][] = [
                    'id' => $field['definition']['id'],
                    'value' => $field['value']
                ];
            }
        }

        $this->body = array_filter($contact, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.update';
    }
}
