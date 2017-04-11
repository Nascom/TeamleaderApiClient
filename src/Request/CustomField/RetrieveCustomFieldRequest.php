<?php

namespace Nascom\TeamleaderApiClient\Request\CustomField;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveCustomFieldRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CustomField
 */
class RetrieveCustomFieldRequest extends AbstractPostRequest
{
    /**
     * RetrieveCustomFieldRequest constructor.
     *
     * @param $custom_field_id
     * @param array $options
     */
    public function __construct($custom_field_id, array $options = [])
    {
        $this->options = $options;
        $this->setCustomFieldId($custom_field_id);
    }

    /**
     * @param $custom_field_id
     */
    public function setCustomFieldId($custom_field_id)
    {
        $this->options['custom_field_id'] = $custom_field_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCustomFieldInfo.php';
    }
}
