<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Attributes\ContactFilter;
use Nascom\TeamleaderApiClient\Attributes\Page;
use Nascom\TeamleaderApiClient\Attributes\Sort;
use Nascom\TeamleaderApiClient\Entity\Contact;
use Nascom\TeamleaderApiClient\Exception\ApiException;
use Nascom\TeamleaderApiClient\Request\Contact\ContactsAddRequest;
use Nascom\TeamleaderApiClient\Request\Contact\ContactsDeleteRequest;
use Nascom\TeamleaderApiClient\Request\Contact\ContactsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Contact\ContactsListRequest;

class ContactRepository extends RepositoryBase
{

    /**
     * Gets a list of contacts.
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.list
     * @param ContactFilter|null $filter
     * @param Page|null $page
     * @param Sort[]|null $sorts
     * @throws ApiException
     * @return Contact[]
     */
    public function listContacts(ContactFilter $filter = null, Page $page = null, array $sorts = [])
    {
        $request = new ContactsListRequest();
        if ($page !== null) {
            $request->setPage($page);
        }
        if ($filter !== null) {
            $request->setFilter($filter);
        }
        if (!empty($sorts)) {
            $request->setSort($sorts);
        }

        $response = $this->sendRequest($request);
        $responseBody = $this->getResponseBody($response);

        $contacts = [];
        if (!isset($responseBody['data'])) {
            throw new ApiException('Something went wrong while fetching the contacts');
        }
        foreach ($responseBody['data'] as $contactItem) {
            $contacts[] = new Contact($contactItem);
        }

        return $contacts;
    }

    /**
     * Get details for a single contact.
     *
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.info
     * @param string $id
     * @throws ApiException
     * @return Contact
     */
    public function getContact($id)
    {
        $request = new ContactsInfoRequest($id);
        $response = $this->sendRequest($request);
        $responseBody = $this->getResponseBody($response);

        if (!isset($responseBody['data'])) {
            throw new ApiException('Something went wrong while getting information for user with id .' . $id);
        }
        $contact = new Contact($responseBody['data']);

        return $contact;
    }


    /**
     * Add a new contact.
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.add
     * @param Contact $contact
     * @throws ApiException
     * @return Contact
     */
    public function addContact(Contact $contact) {

        $request = new ContactsAddRequest($contact);
        $response = $this->sendRequest($request);
        $responseBody = $this->getResponseBody($response);

        if ($response->getStatusCode() != 201) {
            throw new ApiException('Something went wrong while creating a contact.');
        }

        if (!isset($responseBody['data']['id'])) {
            throw new ApiException('Something went wrong while creating a contact.');
        }
        if (isset($responseBody['data']['id'])) {
            $contact->setId($responseBody['data']['id']);
        }

        return $contact;
    }

    /**
     * Update a contact.
     *
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.update
     * @param Contact $contact
     * @return Contact
     */
    public function updateContact(Contact $contact) {
        //@TODO.
    }

    /**
     * Delete a contact.
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.delete
     * @throws ApiException
     * @param string $id
     * @return bool
     */
    public function deleteContact($id) {
        $request = new ContactsDeleteRequest($id);
        $response = $this->sendRequest($request);
        $this->getResponseBody($response);
        if ($response->getStatusCode() != 204) {
            return false;
        }
        return true;
    }

    /**
     * @param string $id
     * @param array $tags
     */
    public function tagContact($id, array $tags) {
        //@TODO.
    }

    /**
     * @param string $id
     * @param array $tags
     */
    public function untagContact($id, array $tags) {
        //@TODO.
    }

}
