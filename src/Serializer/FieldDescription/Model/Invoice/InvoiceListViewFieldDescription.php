<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice;

use Nascom\TeamleaderApiClient\Model\Aggregate\Invoicee;
use Nascom\TeamleaderApiClient\Model\Invoice\InvoiceListView;

/**
 * Class InvoiceListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Invoice
 */
class InvoiceListViewFieldDescription extends InvoiceFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        return array_merge(parent::getFieldMapping(), [
            'invoicee'=> ['target_class' => Invoicee::class],
        ]);
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return InvoiceListView::class;
    }
}
