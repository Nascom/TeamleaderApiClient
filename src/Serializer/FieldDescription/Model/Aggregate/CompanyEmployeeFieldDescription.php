<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\CompanyEmployee;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDefinition;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CompanyEmployeeFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class CompanyEmployeeFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'position',
            'decision_maker',
            'company' => ['target_class' => LinkedDefinition::class],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return CompanyEmployee::class;
    }
}
