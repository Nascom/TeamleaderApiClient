<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceTax;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use Nascom\TeamleaderApiClient\Model\Aggregate\TotalWithDue;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TotalWithDueFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class TotalWithDueFieldDescription extends TotalFieldDescription
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return array_merge(
            parent::getFieldMapping(),
            [
                'due' => ['target_class' => PaymentAmount::class],
            ]
        );
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return TotalWithDue::class;
    }
}
