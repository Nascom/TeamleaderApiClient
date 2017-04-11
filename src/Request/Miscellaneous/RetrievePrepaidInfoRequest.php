<?php

namespace Nascom\TeamleaderApiClient\Request\Miscellaneous;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrievePrepaidInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Miscellaneous
 */
class RetrievePrepaidInfoRequest extends AbstractPostRequest
{
    /**
     * RetrievePrepaidInfoRequest constructor.
     *
     * @param $contact_or_company
     * @param $contact_or_company_id
     * @param array $options
     */
    public function __construct($contact_or_company, $contact_or_company_id, array $options = [])
    {
        $this->options = $options;
        $this->setContactOrCompany($contact_or_company);
        $this->setContactOrCompanyId($contact_or_company_id);
    }

    /**
     * @param $contact_or_company
     */
    public function setContactOrCompany($contact_or_company)
    {
        $this->options['contact_or_company'] = $contact_or_company;
    }

    /**
     * @param $contact_or_company_id
     */
    public function setContactOrCompanyId($contact_or_company_id)
    {
        $this->options['contact_or_company_id'] = $contact_or_company_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getPrepaidInfo.php';
    }
}
