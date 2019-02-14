<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone;

use Nascom\TeamleaderApiClient\Model\Milestone\MilestoneListView;

/**
 * Class MilestoneListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone
 */
class MilestoneListViewFieldDescription extends MilestoneFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return MilestoneListView::class;
    }
}
