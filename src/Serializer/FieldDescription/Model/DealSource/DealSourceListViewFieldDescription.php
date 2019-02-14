<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealSource;

use Nascom\TeamleaderApiClient\Model\DealSource\DealSourceListView;

/**
 * Class DealSourceListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealSource
 */
class DealSourceListViewFieldDescription extends DealSourceFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return DealSourceListView::class;
    }
}
