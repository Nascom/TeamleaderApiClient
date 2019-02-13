<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsUnlinkFromCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsUnlinkFromCompanyRequest extends PostRequest
{
    /**
     * ContactsUnlinkFromCompanyRequest constructor.
     *
     * @param string $id
     * @param string $companyId
     */
    public function __construct($id, $companyId)
    {
        $this->body['id'] = $id;
        $this->body['company_id'] = $companyId;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.unlinkFromCompany';
    }
}
