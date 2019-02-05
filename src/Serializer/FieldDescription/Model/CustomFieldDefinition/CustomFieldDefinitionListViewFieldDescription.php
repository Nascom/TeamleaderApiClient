<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinitionListView;

class CustomFieldDefinitionListViewFieldDescription extends CustomFieldDefinitionFieldDescriptionBase
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
        return CustomFieldDefinitionListView::class;
    }
}
