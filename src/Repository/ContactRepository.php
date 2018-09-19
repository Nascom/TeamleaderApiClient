<?php

namespace Nascom\TeamleaderApiClient\Repository;


use Nascom\TeamleaderApiClient\Model\Contact;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\ContactFilter;
use Nascom\TeamleaderApiClient\Request\Attributes\PageInfo;
use Nascom\TeamleaderApiClient\Request\Attributes\SortInfo;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsListRequest;

/**
 * Class ContactRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class ContactRepository extends RepositoryBase
{
    /**
     * @param ContactFilter|null $filter
     * @param PageInfo|null $pageInfo
     * @param SortInfo|null $sortInfo
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function listContacts(
        ContactFilter $filter = null,
        PageInfo $pageInfo = null,
        SortInfo $sortInfo = null
    ) {
        $contactsListRequest = new ContactsListRequest(
            $filter,
            $pageInfo,
            $sortInfo
        );

        return $this->handleRequest(
            $contactsListRequest,
            Contact::class . '[]'
        );
    }
}
