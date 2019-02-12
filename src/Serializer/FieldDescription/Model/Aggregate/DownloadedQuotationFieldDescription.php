<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedQuotation;

/**
 * Class DownloadedQuotationFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class DownloadedQuotationFieldDescription extends DownloadedFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return DownloadedQuotation::class;
    }
}
