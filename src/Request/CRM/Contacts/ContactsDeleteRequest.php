<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsDeleteRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsDeleteRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsDeleteRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.delete';
    }
}
