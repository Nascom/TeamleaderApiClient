<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType;

use Nascom\TeamleaderApiClient\Model\BusinessType\BusinessTypeBase;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class BusinessTypeFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType
 */
abstract class BusinessTypeFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
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
     * @return string
     */
    public function getTargetClass()
    {
        return BusinessTypeBase::class;
    }
}
