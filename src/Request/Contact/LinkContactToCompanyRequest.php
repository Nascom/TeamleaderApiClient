<?php

namespace Nascom\TeamleaderApiClient\Request\Contact;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class LinkContactToCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Contact
 */
class LinkContactToCompanyRequest extends AbstractPostRequest
{
    /**
     * LinkContactToCompanyRequest constructor.
     *
     * @param $contact_id
     * @param $company_id
     * @param $mode
     * @param array $options
     *   Optional parameters:
     *   - function
     */
    public function __construct($contact_id, $company_id, $mode, array $options = [])
    {
        $this->options = $options;
        $this->setContactId($contact_id);
        $this->setCompanyId($company_id);
        $this->setMode($mode);
    }

    /**
     * @param $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->options['contact_id'] = $contact_id;
    }

    /**
     * @param $company_id
     */
    public function setCompanyId($company_id)
    {
        $this->options['company_id'] = $company_id;
    }

    /**
     * @param $mode
     */
    public function setMode($mode)
    {
        $this->options['mode'] = $mode;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'linkContactToCompany.php';
    }
}
