<?php

namespace Nascom\TeamleaderApiClient\Request\Company;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Company
 */
class RetrieveCompanyRequest extends AbstractPostRequest
{
    /**
     * RetrieveCompanyRequest constructor.
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
        return 'getCompany.php';
    }
}
