<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsCreateRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsCreateRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsCreateRequest constructor.
     *
     * @param array $deal
     */
    public function __construct(array $deal)
    {
        if (isset($deal['lead']['contact_person']['id'])) {
            $deal['lead']['contact_person_id'] = $deal['lead']['contact_person']['id'];
        }

        unset($deal['lead']['contact_person']);

        if (isset($deal['custom_fields'])) {
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
        }

        $this->body = array_filter($deal, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'deals.create';
    }
}
