<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Model\Company\Company;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesAddRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesAddRequest extends PostRequest
{
    public function __construct(array $company)
    {
        if ($company['custom_fields'] == null) {
            unset($company['custom_fields']);
        }
        $this->body = array_filter($company);
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'companies.add';
    }
}
