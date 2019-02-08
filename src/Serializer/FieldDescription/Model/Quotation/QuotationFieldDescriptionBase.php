<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Quotation;

use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDeal;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class QuotationFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Quotation
 */
abstract class QuotationFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'deal' => ['target_class' => LinkedDeal::class],
            'grouped_lines' => ['target_class' => GroupedLine::class.'[]'],
        ];
    }
}
