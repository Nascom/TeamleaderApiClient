<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\Phase;
use Nascom\TeamleaderApiClient\Model\Deal\DealListView;

/**
 * Class DealListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal
 */
class DealListViewFieldDescription extends DealFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'current_phase' => ['target_class' => Phase::class]
        ];

        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return DealListView::class;
    }
}
