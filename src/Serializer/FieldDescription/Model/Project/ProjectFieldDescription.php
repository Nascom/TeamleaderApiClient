<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedMileStone;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;
use Nascom\TeamleaderApiClient\Model\Project\Project;

/**
 * Class ProjectFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Project
 */
class ProjectFieldDescription extends ProjectFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        return array_merge(
            parent::getFieldMapping(),
            [
                'milestones' => ['target_class' => LinkedMileStone::class.'[]'],
                'participants' => ['target_class' => LinkedParticipantWithRole::class.'[]'],
            ]
        );
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Project::class;
    }
}
