<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedContact;
use Nascom\TeamleaderApiClient\Model\Contact\ContactListView;
use Nascom\TeamleaderApiClient\Model\Contact\Contact;
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
     * @param array $filters
     * @param array $sort
     * @param array $page
     *
     * @return ContactListView[]
     * @throws \Http\Client\Exception
     */
    public function listContacts(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new ContactsListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            ContactListView::class . '[]'
        );
    }

    /**
     * @param string $id
     *
     * @return Contact
     * @throws \Http\Client\Exception
     */
    public function getContact($id)
    {
        $request = new ContactsInfoRequest($id);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            Contact::class
        );
    }

    /**
     * @param Contact $contact
     *
     * @return LinkedContact
     * @throws \Http\Client\Exception
     */
    public function addContact(Contact $contact)
    {
        $request = new ContactsAddRequest($this->normalize($contact));
        $request->setMethod('POST');

        return $this->handleRequest(
            $request,
            LinkedContact::class
        );
    }

    /**
     * @param Contact $contact
     *
     * @throws \Http\Client\Exception
     */
    public function updateContact(Contact $contact)
    {
        $request = new ContactsUpdateRequest($this->normalize($contact));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     *
     * @throws \Http\Client\Exception
     */
    public function deleteContact($id)
    {
        $request = new ContactsDeleteRequest($id);
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param array $tags
     *
     * @throws \Http\Client\Exception
     */
    public function tagContact($id, array $tags)
    {
        $request = new ContactsTagRequest($id, $tags);
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param array $tags
     *
     * @throws \Http\Client\Exception
     */
    public function untagContact($id, array $tags)
    {
        $request = new ContactsUntagRequest($id, $tags);
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param string $companyId
     * @param string $position
     * @param boolean $decisionMaker
     *
     * @throws \Http\Client\Exception
     */
    public function linkContactToCompany(
        $id,
        $companyId,
        $position,
        $decisionMaker
    ) {
        $request = new ContactsLinkToCompanyRequest(
            $id,
            $companyId,
            $position,
            $decisionMaker
        );
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param string $companyId
     *
     * @throws \Http\Client\Exception
     */
    public function unlinkContactFromCompany($id, $companyId)
    {
        $request = new ContactsUnlinkFromCompanyRequest(
            $id,
            $companyId
        );
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }
}
