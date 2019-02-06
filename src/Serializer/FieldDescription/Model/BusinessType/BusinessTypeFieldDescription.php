<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType;

use Nascom\TeamleaderApiClient\Model\BusinessTypes\BusinessTypes;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class BusinessTypeFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\BusinessType
 */
class BusinessTypeFieldDescription extends FieldDescriptionBase
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
        return BusinessTypes::class;
    }
}
