<?php

namespace Nascom\TeamleaderApiClient\Request\CustomField;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListCustomFieldsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CustomField
 */
class ListCustomFieldsRequest extends AbstractPostRequest
{
    /**
     * ListCustomFieldsRequest constructor.
     *
     * @param $for
     * @param array $options
     */
    public function __construct($for, array $options = [])
    {
        $this->options = $options;
        $this->setFor($for);
    }

    /**
     * @param $for
     */
    public function setFor($for)
    {
        $this->options['for'] = $for;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCustomFields.php';
    }
}
