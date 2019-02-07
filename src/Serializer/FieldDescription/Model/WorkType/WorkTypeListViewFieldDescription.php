<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkType;

use Nascom\TeamleaderApiClient\Model\WorkType\WorkTypeListView;

/**
 * Class WorkTypeListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkType
 */
class WorkTypeListViewFieldDescription extends WorkTypeFieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return parent::getFieldMapping();
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return WorkTypeListView::class;
    }
}
