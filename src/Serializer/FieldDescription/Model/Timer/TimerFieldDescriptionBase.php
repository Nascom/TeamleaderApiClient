<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Timer;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TimerFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Timer
 */
abstract class TimerFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'user' => ['target_class' => Account::class],
            'work_type' => ['target_class' => LinkedWorkType::class],
            'started_at' => ['target_class' => \DateTime::class],
            'description',
            'subject' => ['target_class' => LinkedSubject::class],
            'invoiceable',
        ];
    }
}
