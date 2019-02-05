<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsTagRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsTagRequest extends PostRequest
{
    /**
     * ContactsTagRequest constructor.
     * @param string $id
     * @param array $tags
     */
    public function __construct($id, array $tags)
    {
        $this->body['id'] = $id;
        $this->body['tags'] = $tags;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.tag';
    }
}
