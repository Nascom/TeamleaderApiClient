<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkOrder;

use DateTime;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WorkOrderFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkOrder
 */
abstract class WorkOrderFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'customer' => ['target_class' => LinkedCustomer::class],
            'starts_at' => ['target_class' => DateTime::class],
            'description',
            'department_id',
            'milestone_id',
            'event_id',
        ];
    }
}
