<?php

namespace Nascom\TeamleaderApiClient\Repository;

use GuzzleHttp\Psr7\Request;
use Http\Discovery\MessageFactoryDiscovery;
use Nascom\TeamleaderApiClient\Request\Contact\ContactsListRequest;

class ContactRepository extends RepositoryBase
{

    /**
     * Gets a list of contacts.
     *
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.list
     */
    public function listContacts($filter = null, $page = null, $sort = null) {
        $url = 'contacts.list';

        $request = new ContactsListRequest($page, $filter, $sort);
        $response = $this->sendRequest($request);

//        // Get them as Contacts objects
//        $contacts = [];
//        foreach ($data as $dataItem) {
//            $slots[] = new Contact($dataItem);
//        }
//        return $contacts;

        return $response->getBody()->getContents();
    }
}
