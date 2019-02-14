<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType;

use Nascom\TeamleaderApiClient\Model\BusinessType\BusinessTypeListView;

/**
 * Class BusinessTypeListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LinkedBusinessType
 */
class BusinessTypeListViewFieldDescription extends BusinessTypeFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return BusinessTypeListView::class;
    }
}
