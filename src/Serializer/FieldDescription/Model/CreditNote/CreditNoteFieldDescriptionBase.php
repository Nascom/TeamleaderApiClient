<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote;

use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceeMinimal;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedInvoice;
use Nascom\TeamleaderApiClient\Model\Aggregate\Total;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CreditNoteFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\CreditNote
 */
abstract class CreditNoteFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'department' => ['target_class' => LinkedDepartment::class],
            'credit_note_number',
            'credit_note_date',
            'status',
            'invoice' => ['target_class' => LinkedInvoice::class],
            'paid',
            'paid_at',
            'invoicee' => ['target_class' => InvoiceeMinimal::class],
            'total' => ['target_class' => Total::class],
            'created_at' => ['target_class' => \DateTime::class],
            'updated_at' => ['target_class' => \DateTime::class],
        ];
    }
}
