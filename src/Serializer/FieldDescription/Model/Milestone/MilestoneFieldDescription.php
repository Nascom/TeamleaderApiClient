<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone;

use Nascom\TeamleaderApiClient\Model\Milestone\Milestone;

/**
 * Class MilestoneFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone
 */
class MilestoneFieldDescription extends MilestoneFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Milestone::class;
    }
}
