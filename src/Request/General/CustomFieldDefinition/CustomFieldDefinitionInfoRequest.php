<?php

namespace Nascom\TeamleaderApiClient\Request\General\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class CustomFieldDefinitionInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Departments
 */
class CustomFieldDefinitionInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * CustomFieldDefinitionInfoRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'customFieldDefinitions.info';
    }
}
