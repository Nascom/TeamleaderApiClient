<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\Aggregate\TotalWithDue;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class InvoiceFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice
 */
abstract class InvoiceFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'department' => ['target_class' => LinkedDepartment::class],
            'invoice_number',
            'invoice_date',
            'status',
            'due_on',
            'paid',
            'paid_at' => ['target_class' => \DateTime::class],
            'total' => ['target_class' => TotalWithDue::class],
            'created_at' => ['target_class' => \DateTime::class],
            'updated_at'=> ['target_class' => \DateTime::class],
        ];
    }
}
