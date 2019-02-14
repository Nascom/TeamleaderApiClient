<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TaxRate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TaxRateFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TaxRate
 */
abstract class TaxRateFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'description',
            'rate',
            'department' => ['target_class' => LinkedDepartment::class],
        ];
    }
}
