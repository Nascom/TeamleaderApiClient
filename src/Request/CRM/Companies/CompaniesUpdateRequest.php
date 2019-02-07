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
        if (!empty($company['business_type'])) {
            $company['business_type_id'] = $company['business_type']['id'];
        }

        unset($company['business_type']);

        $customFields = $company['custom_fields'];
        $company['custom_fields'] = [];

        foreach ($customFields as $field) {
            if (isset($field['value'])) {
                $company['custom_fields'][] = [
                    'id' => $field['definition']['id'],
                    'value' => $field['value']
                ];
            }
        }

        $this->body = array_filter($company, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'companies.update';
    }
}
