<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class PaymentAmountFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class PaymentAmountFieldDescription extends FieldDescriptionBase
{

    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'amount',
            'currency',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return PaymentAmount::class;
    }
}
