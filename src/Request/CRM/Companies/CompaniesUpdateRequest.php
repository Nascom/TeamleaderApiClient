<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesUpdateRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesUpdateRequest extends PostRequest
{
    public function __construct(array $company)
    {
        if (empty($company['business_type'])) {
            $company['business_type_id'] = $company['business_type']['id'];
        }

        unset($company['business_type']);
        unset($company['custom_fields']);

        $this->body = $company;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'companies.update';
    }
}
