<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedPhase;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use Nascom\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class PhaseHistoryFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class PhaseHistoryFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
              'phase' => ['target_class' => LinkedPhase::class],
              'started_at' => ['target_class' => \DateTime::class],
              'started_by' => ['target_class' => LinkedUser::class],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return PhaseHistory::class;
    }
}
