<?php

namespace Nascom\TeamleaderApiClient\Request\General\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CustomFieldDefinitionListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class CustomFieldDefinitionListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'customFieldDefinitions.list';
    }
}
