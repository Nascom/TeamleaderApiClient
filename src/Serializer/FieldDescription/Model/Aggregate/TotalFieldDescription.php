<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\TaxCalculated;
use Nascom\TeamleaderApiClient\Model\Aggregate\Total;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TotalFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class TotalFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'tax_exclusive' => ['target_class' => TaxCalculated::class],
            'tax_exclusive_before_discount' => ['target_class' => TaxCalculated::class],
            'tax_inclusive' => ['target_class' => TaxCalculated::class],
            'tax_inclusive_before_discount' => ['target_class' => TaxCalculated::class],
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Total::class;
    }
}
