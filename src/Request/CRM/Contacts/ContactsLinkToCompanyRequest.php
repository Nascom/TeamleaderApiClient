<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Contacts;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class ContactsLinkToCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Contacts
 */
class ContactsLinkToCompanyRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * ContactsLinkToCompanyRequest constructor.
     *
     * @param string $id
     * @param string $companyId
     * @param string $position
     * @param boolean $decisionMaker
     */
    public function __construct(
        $id,
        $companyId,
        $position,
        $decisionMaker
    ) {
        $this->body['id'] = $id;
        $this->body['company_id'] = $companyId;
        $this->body['position'] = $position;
        $this->body['decision_maker'] = $decisionMaker;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'contacts.linkToCompany';
    }
}
