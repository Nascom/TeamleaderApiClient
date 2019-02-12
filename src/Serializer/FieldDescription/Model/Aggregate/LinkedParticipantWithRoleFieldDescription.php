<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedParticipant;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedParticipantWithRole;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedParticipantWithRoleFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedParticipantWithRoleFieldDescription extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'participant' => ['target_class' => LinkedParticipant::class],
            'role',
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return LinkedParticipantWithRole::class;
    }
}
