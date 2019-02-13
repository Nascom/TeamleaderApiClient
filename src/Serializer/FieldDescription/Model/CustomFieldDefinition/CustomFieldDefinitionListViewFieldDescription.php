<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinitionListView;

/**
 * Class CustomFieldDefinitionListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition
 */
class CustomFieldDefinitionListViewFieldDescription extends CustomFieldDefinitionFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return CustomFieldDefinitionListView::class;
    }
}
