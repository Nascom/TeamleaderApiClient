<?php

namespace Nascom\TeamleaderApiClient\Repository;

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
//        $url .= $this->getQueryString($options);
        // Now make the request.
        $request = $this->getRequest('GET', $url);
        $data = $this->getResponseJson($request);

//        $request = new Request('GET', $url);
//        $data = $this->getResponseJson($request);
//        // Get them as Slot objects
//        $slots = [];
//        foreach ($data as $dataItem) {
//            $slots[] = new Slot($dataItem);
//        }
//        return $slots;

        return $data;
    }
}