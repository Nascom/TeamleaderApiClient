<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\PaymentTerm;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class PaymentTermFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\PaymentTerm
 */
abstract class PaymentTermFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'type',
            'days',
        ];
    }
}
