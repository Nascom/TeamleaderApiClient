<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsUpdateRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsUpdateRequest extends PostRequest
{
    /**
     * DealsUpdateRequest constructor.
     * @param array $deal
     */
    public function __construct(array $deal)
    {
        if (isset($deal['lead']['contact_person']['id'])) {
            $deal['lead']['contact_person_id'] = $deal['lead']['contact_person']['id'];
        }

        unset($deal['lead']['contact_person']);

        $customFields = $deal['custom_fields'];
        $deal['custom_fields'] = [];

        foreach ($customFields as $field) {
            if (isset($field['value'])) {
                $deal['custom_fields'][] = [
                    'id' => $field['definition']['id'],
                    'value' => $field['value'],
                ];
            }
        }

        $this->body = array_filter($deal, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'deals.update';
    }
}
