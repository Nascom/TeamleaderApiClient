<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedProject;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class MilestoneFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Milestone
 */
abstract class MilestoneFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'project' => ['target_class' => LinkedProject::class],
            'due_on',
            'name',
            'responsible_user' => ['target_class' => LinkedUser::class],
            'status',
        ];
    }
}
