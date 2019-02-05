<?php

namespace Nascom\TeamleaderApiClient\Request\General\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class CustomFieldDefinitionListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class CustomFieldDefinitionListRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'customFieldDefinitions.list';
    }
}
