<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkOrder;

use Nascom\TeamleaderApiClient\Model\WorkOrder\WorkOrder;

/**
 * Class WorkOrderFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WorkOrder
 */
class WorkOrderFieldDescription extends WorkOrderFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return WorkOrder::class;
    }
}
