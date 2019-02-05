<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\BaseListRequest;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\ContactFilter;

/**
 * Class ContactsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsListRequest extends BaseListRequest
{
    /**
     * @param ContactFilter $filter
     */
    public function setFilter(ContactFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @inheritdock
     */
    public function getEndpoint()
    {
        return 'contacts.list';
    }
}
