<?php

namespace Nascom\TeamleaderApiClient\Repository;


use Nascom\TeamleaderApiClient\Model\Contact\ContactListView;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\ContactFilter;
use Nascom\TeamleaderApiClient\Request\Attributes\PageInfo;
use Nascom\TeamleaderApiClient\Request\Attributes\SortInfo;
use Nascom\TeamleaderApiClient\Model\Contact\Contact;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsAddRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsInfoRequest;
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
     * @return ContactListView[]
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
            ContactListView::class . '[]'
        );
    }

    /**
     * @param string $id
     * @return Contact
     * @throws \Http\Client\Exception
     */
    public function getContact($id)
    {
        return $this->handleRequest(
            new ContactsInfoRequest($id),
            Contact::class
        );
    }

    /**
     * @param Contact $contact
     * @throws \Http\Client\Exception
     */
    public function addContact(Contact $contact)
    {
        $contactArray = $this->normalize($contact);
        $contactAddRequest = new ContactsAddRequest($contactArray);
        $this->apiClient->handle($contactAddRequest);
    }
}
