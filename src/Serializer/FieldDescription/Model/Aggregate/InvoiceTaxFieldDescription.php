<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceTax;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentAmount;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class InvoiceTaxFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class InvoiceTaxFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'rate',
            'taxable' => ['target_class' => PaymentAmount::class],
            'tax' => ['target_class' => PaymentAmount::class],
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return InvoiceTax::class;
    }
}
