<?php

namespace Nascom\TeamleaderApiClient\Repository;


use Nascom\TeamleaderApiClient\Model\Contact\ContactListView;
use Nascom\TeamleaderApiClient\Model\Contact\Contact;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\ContactFilter;
use Nascom\TeamleaderApiClient\Request\Attributes\PageInfo;
use Nascom\TeamleaderApiClient\Request\Attributes\SortInfo;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsAddRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsDeleteRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsInfoRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsLinkToCompanyRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsListRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsTagRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsUnlinkFromCompanyRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsUntagRequest;
use Nascom\TeamleaderApiClient\Request\CRM\Contacts\ContactsUpdateRequest;

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
            ContactListView::class.'[]'
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

    /**
     * @param Contact $contact
     * @throws \Http\Client\Exception
     */
    public function updateContact(Contact $contact)
    {
        $contactArray = $this->normalize($contact);
        $contactAddRequest = new ContactsUpdateRequest($contactArray);
        $this->apiClient->handle($contactAddRequest);
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function deleteContact($id)
    {
        $request = new ContactsDeleteRequest($id);
        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param array $tags
     * @throws \Http\Client\Exception
     */
    public function tagContact($id, array $tags)
    {
        $request = new ContactsTagRequest($id, $tags);
        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param array $tags
     * @throws \Http\Client\Exception
     */
    public function untagContact($id, array $tags)
    {
        $request = new ContactsUntagRequest($id, $tags);
        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param string $companyId
     * @param string $position
     * @param boolean $decisionMaker
     * @throws \Http\Client\Exception
     */
    public function linkContactToCompany($id, $companyId, $position, $decisionMaker)
    {
        $request = new ContactsLinkToCompanyRequest($id, $companyId, $position, $decisionMaker);
        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param string $companyId
     * @throws \Http\Client\Exception
     */
    public function unlinkContactFromCompany($id, $companyId)
    {
        $request = new ContactsUnlinkFromCompanyRequest($id, $companyId);
        $this->apiClient->handle($request);
    }
}
