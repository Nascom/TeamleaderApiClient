<?php

namespace Nascom\TeamleaderApiClient\Request\Contact;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListContactsRelatedToCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Contact
 */
class ListContactsRelatedToCompanyRequest extends AbstractPostRequest
{
    /**
     * ListContactsRelatedToCompanyRequest constructor.
     *
     * @param $company_id
     * @param array $options
     */
    public function __construct($company_id, array $options = [])
    {
        $this->options = $options;
        $this->setCompanyId($company_id);
    }

    /**
     * @param $company_id
     */
    public function setCompanyId($company_id)
    {
        $this->options['company_id'] = $company_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getContactsByCompany.php';
    }
}
