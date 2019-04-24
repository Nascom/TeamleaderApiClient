<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;
use Nascom\TeamleaderApiClient\Model\Project\Project;

/**
 * Class ProjectFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project
 */
class ProjectFieldDescription extends ProjectFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'milestones' => ['target_class' => LinkedMileStone::class.'[]'],
            'participants' => ['target_class' => LinkedParticipantWithRole::class.'[]'],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Project::class;
    }
}
