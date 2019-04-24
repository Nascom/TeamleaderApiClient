<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceTax;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use Nascom\TeamleaderApiClient\Model\Aggregate\Total;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TotalFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class TotalFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'tax_exclusive' => ['target_class' => PaymentAmount::class],
            'tax_inclusive' => ['target_class' => PaymentAmount::class],
            'payable' => ['target_class' => PaymentAmount::class],
            'taxes' => ['target_class' => InvoiceTax::class.'[]'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Total::class;
    }
}
