<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedInvoice;

/**
 * Class DownloadedInvoiceFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class DownloadedInvoiceFieldDescription extends DownloadedFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return DownloadedInvoice::class;
    }
}
