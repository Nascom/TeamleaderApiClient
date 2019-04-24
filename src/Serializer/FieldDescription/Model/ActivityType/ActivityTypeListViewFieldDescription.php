<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ActivityType;

use Nascom\TeamleaderApiClient\Model\ActivityType\ActivityTypeListView;

/**
 * Class ActivityTypeListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ActivityType
 */
class ActivityTypeListViewFieldDescription extends ActivityTypeFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return ActivityTypeListView::class;
    }
}
