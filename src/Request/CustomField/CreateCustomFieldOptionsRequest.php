<?php

namespace Nascom\TeamleaderApiClient\Request\CustomField;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateCustomFieldOptionsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CustomField
 */
class CreateCustomFieldOptionsRequest extends AbstractPostRequest
{
    /**
     * CreateCustomFieldOptionsRequest constructor.
     *
     * @param $custom_field_id
     * @param $option_name
     * @param array $options
     */
    public function __construct($custom_field_id, $option_name, array $options = [])
    {
        $this->options = $options;
        $this->setCustomFieldId($custom_field_id);
        $this->setOptionName($option_name);
    }

    /**
     * @param $custom_field_id
     */
    public function setCustomFieldId($custom_field_id)
    {
        $this->options['custom_field_id'] = $custom_field_id;
    }

    /**
     * @param $option_name
     */
    public function setOptionName($option_name)
    {
        $this->options['option_name'] = $option_name;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addCustomFieldOption.php';
    }
}
