<?php

namespace Nascom\TeamleaderApiClient\Request\RelatedParty;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateRelatedPartyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\RelatedParty
 */
class CreateRelatedPartyRequest extends AbstractPostRequest
{
    /**
     * CreateRelatedPartyRequest constructor.
     *
     * @param $project_id
     * @param $group
     * @param $contact_or_company
     * @param $contact_or_company_id
     * @param array $options
     *   Optional parameters:
     *   - role
     */
    public function __construct($project_id, $group, $contact_or_company, $contact_or_company_id, array $options = [])
    {
        $this->options = $options;
        $this->setProjectId($project_id);
        $this->setGroup($group);
        $this->setContactOrCompany($contact_or_company);
        $this->setContactOrCompanyId($contact_or_company_id);
    }

    /**
     * @param $project_id
     */
    public function setProjectId($project_id)
    {
        $this->options['project_id'] = $project_id;
    }

    /**
     * @param $group
     */
    public function setGroup($group)
    {
        $this->options['group'] = $group;
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
        return 'addRelatedPartyToProject.php';
    }
}
