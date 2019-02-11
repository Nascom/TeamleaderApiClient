<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice;

use Nascom\TeamleaderApiClient\Model\Aggregate\DiscountWithDescription;
use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\Aggregate\InvoiceeExtended;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentWithDate;
use Nascom\TeamleaderApiClient\Model\Invoice\Invoice;

/**
 * Class InvoiceFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice
 */
class InvoiceFieldDescription extends InvoiceFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        return array_merge(
            parent::getFieldMapping(),
            [
                'invoicee' => ['target_class' => InvoiceeExtended::class],
                'discounts' => ['target_class' => DiscountWithDescription::class.'[]'],
                'grouped_lines' => ['target_class' => GroupedLine::class.'[]'],
                'payment_term' => ['target_class' => PaymentTerm::class],
                'payments' => ['target_class' => PaymentWithDate::class.'[]'],
                'payment_reference',
                'note',
            ]
        );
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Invoice::class;
    }
}
