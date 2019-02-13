<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedSubject;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedSubjectFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedSubjectFieldDescription extends FieldDescriptionBase
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
        return LinkedSubject::class;
    }
}
