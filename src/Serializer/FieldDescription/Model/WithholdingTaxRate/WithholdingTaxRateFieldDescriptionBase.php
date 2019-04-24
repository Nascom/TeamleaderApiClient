<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WithholdingTaxRate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WithholdingTaxRateFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WithholdingTaxRate
 */
abstract class WithholdingTaxRateFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'department' => ['target_class' => LinkedDepartment::class],
            'description',
            'rate',
        ];
    }
}
