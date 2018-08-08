<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClient;
use Nascom\TeamleaderApiClient\Request\RequestInterface;

class ContactRepository extends RepositoryBase
{

    /**
     * Gets a list of contacts.
     *
     * @see https://developer.teamleader.eu/#/reference/crm/contacts/contacts.list
     */
    public function listContacts() {
        $url = 'contacts.list';
        $contacts = $this->getResponse('GET', $url);

//        // Get them as Contacts objects
//        $contacts = [];
//        foreach ($data as $dataItem) {
//            $slots[] = new Contact($dataItem);
//        }
//        return $contacts;

        return $contacts;
    }
}
