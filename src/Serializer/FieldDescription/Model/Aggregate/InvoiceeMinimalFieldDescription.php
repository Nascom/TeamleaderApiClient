<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomer;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class InvoiceeMinimalFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class InvoiceeMinimalFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'name',
            'vat_number',
            'customer' => ['target_class' => LinkedCustomer::class],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return InvoiceeMinimal::class;
    }
}
