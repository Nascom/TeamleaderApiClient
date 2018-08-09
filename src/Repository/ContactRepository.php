<?php

namespace Nascom\TeamleaderApiClient\Repository;

use GuzzleHttp\Psr7\Request;
use Http\Discovery\MessageFactoryDiscovery;
use Nascom\TeamleaderApiClient\Attributes\ContactFilter;
use Nascom\TeamleaderApiClient\Attributes\Page;
use Nascom\TeamleaderApiClient\Attributes\Sort;
use Nascom\TeamleaderApiClient\Entity\Contact;
use Nascom\TeamleaderApiClient\Request\Contact\ContactsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Contact\ContactsListRequest;

class ContactRepository extends RepositoryBase
{

    /**
     * Gets a list of contacts.
     *
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.list
     *
     * @param ContactFilter|null $filter
     * @param Page|null $page
     * @param Sort[]|null $sorts
     *
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
        foreach ($responseBody['data'] as $contactItem) {
            $contacts[] = new Contact($contactItem);
        }

        return $contacts;
    }

    /**
     * Get details for a single contact.
     *
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.info
     *
     * @param string $id
     *
     * @return Contact
     */
    public function getContact($id)
    {
        $request = new ContactsInfoRequest($id);

        $response = $this->sendRequest($request);
        $responseBody = $this->getResponseBody($response);

        $contact = [];
        if (isset($responseBody['data'])) {
            $contact = new Contact($responseBody['data']);
        }

        return $contact;
    }
}
