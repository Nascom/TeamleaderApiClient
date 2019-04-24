<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedTodo;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LinkedTodoFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LinkedTodoFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'type',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return LinkedTodo::class;
    }
}
