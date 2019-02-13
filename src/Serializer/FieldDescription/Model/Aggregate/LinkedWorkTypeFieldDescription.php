<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedWorkType;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedWorkTypeFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedWorkTypeFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'type',
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return LinkedWorkType::class;
    }
}
