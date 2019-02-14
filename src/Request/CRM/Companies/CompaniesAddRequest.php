<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesAddRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesAddRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesAddRequest constructor.
     *
     * @param array $company
     */
    public function __construct(array $company)
    {
        if (!empty($company['business_type'])) {
            $company['business_type_id'] = $company['business_type']['id'];
        }

        unset($company['business_type']);

        if (isset($company['custom_fields'])) {
            foreach ($company['custom_fields'] as $key => $customField) {
                if (!isset($customField['id']) && isset($customField['definition'])) {
                    $company['custom_fields'][$key]['id'] = $customField['definition']['id'];
                    unset($company['custom_fields'][$key]['definition']);
                }
            }
        }


        $this->body = array_filter($company, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'companies.add';
    }
}
