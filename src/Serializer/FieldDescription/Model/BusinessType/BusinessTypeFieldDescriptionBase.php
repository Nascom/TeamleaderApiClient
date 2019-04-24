<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType;

use Nascom\TeamleaderApiClient\Model\BusinessType\BusinessTypeBase;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class BusinessTypeFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LinkedBusinessType
 */
abstract class BusinessTypeFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
            'country',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return BusinessTypeBase::class;
    }
}
