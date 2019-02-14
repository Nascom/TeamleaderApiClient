<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice;

use Nascom\TeamleaderApiClient\Model\Aggregate\Invoicee;
use Nascom\TeamleaderApiClient\Model\Invoice\InvoiceListView;

/**
 * Class InvoiceListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice
 */
class InvoiceListViewFieldDescription extends InvoiceFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'invoicee' => ['target_class' => Invoicee::class],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return InvoiceListView::class;
    }
}
