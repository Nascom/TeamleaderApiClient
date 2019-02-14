<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Quotation;

use Nascom\TeamleaderApiClient\Model\Quotation\Quotation;

/**
 * Class QuotationFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Quotation
 */
class QuotationFieldDescription extends QuotationFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Quotation::class;
    }
}
