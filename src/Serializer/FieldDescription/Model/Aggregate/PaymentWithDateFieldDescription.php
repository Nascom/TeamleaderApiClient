<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class PaymentWithDateFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class PaymentWithDateFieldDescription extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'paid_at' => ['target_class' => \DateTime::class],
            'payment' => ['target_class' => PaymentAmount::class],
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return PaymentWithDate::class;
    }
}
