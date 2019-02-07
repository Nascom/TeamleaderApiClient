<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType;

use Nascom\TeamleaderApiClient\Model\BusinessType\BusinessTypeListView;

/**
 * Class BusinessTypeListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType
 */
class BusinessTypeListViewFieldDescription extends BusinessTypeFieldDescriptionBase
{
    /**
     * @inheritdoc
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
        return BusinessTypeListView::class;
    }
}
