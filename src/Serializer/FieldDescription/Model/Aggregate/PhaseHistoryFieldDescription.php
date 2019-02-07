<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\Phase;
use Nascom\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class PhaseHistoryFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class PhaseHistoryFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
              'phase' => ['target_class' => Phase::class],
              'started_at' => ['target_class' => \DateTime::class],
              'started_by' => ['target_class' => Account::class],
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return PhaseHistory::class;
    }
}
