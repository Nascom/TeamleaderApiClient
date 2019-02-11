<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\DownloadedQuotation;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

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
