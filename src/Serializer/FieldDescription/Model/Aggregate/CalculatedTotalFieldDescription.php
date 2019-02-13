<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use Nascom\TeamleaderApiClient\Model\Aggregate\CalculatedTotal;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CalculatedTotalFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class CalculatedTotalFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'tax_exclusive' => ['target_class' => PaymentAmount::class],
            'tax_exclusive_before_discount' => ['target_class' => PaymentAmount::class],
            'tax_inclusive' => ['target_class' => PaymentAmount::class],
            'tax_inclusive_before_discount' => ['target_class' => PaymentAmount::class],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return CalculatedTotal::class;
    }
}
