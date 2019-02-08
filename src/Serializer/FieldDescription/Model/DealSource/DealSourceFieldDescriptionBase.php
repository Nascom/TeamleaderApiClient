<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealSource;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class DealSourceFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealSource
 */
abstract class DealSourceFieldDescriptionBase extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
        ];
    }
}
