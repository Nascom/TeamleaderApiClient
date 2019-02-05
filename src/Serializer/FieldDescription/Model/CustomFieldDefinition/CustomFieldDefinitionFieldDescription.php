<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinition;

/**
 * Class CustomFieldDefinitionFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition
 */
class CustomFieldDefinitionFieldDescription extends CustomFieldDefinitionFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getFieldMapping()
    {
        return parent::getFieldMapping();
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return CustomFieldDefinition::class;
    }
}
