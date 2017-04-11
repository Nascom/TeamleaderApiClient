<?php

namespace Nascom\TeamleaderApiClient\Request\Project;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListProjectsByClientRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Project
 */
class ListProjectsByClientRequest extends AbstractPostRequest
{
    /**
     * ListProjectsByClientRequest constructor.
     *
     * @param $contact_or_company
     * @param $contact_or_company_id
     * @param $deep_search
     * @param array $options
     *   Optional parameters:
     *   - show_inactive_projects
     */
    public function __construct($contact_or_company, $contact_or_company_id, $deep_search, array $options = [])
    {
        $this->options = $options;
        $this->setContactOrCompany($contact_or_company);
        $this->setContactOrCompanyId($contact_or_company_id);
        $this->setDeepSearch($deep_search);
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
     * @param $deep_search
     */
    public function setDeepSearch($deep_search)
    {
        $this->options['deep_search'] = $deep_search;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getProjectsByClient.php';
    }
}
