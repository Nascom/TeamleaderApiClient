<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\ContactWithName;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class InvoiceeFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
abstract class InvoiceeFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'name',
            'vat_number',
            'customer' => ['target_class' => LinkedCustomer::class],
            'for_attention_of' => ['target_class' => ContactWithName::class],
        ];
    }
}
