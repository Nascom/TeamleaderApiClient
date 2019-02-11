<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Invoicee;

/**
 * Class InvoiceeFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class InvoiceeFieldDescription extends InvoiceeFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Invoicee::class;
    }
}
