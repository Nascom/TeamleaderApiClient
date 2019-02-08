<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Discount;
use Nascom\TeamleaderApiClient\Model\Aggregate\LineItem;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedProduct;
use Nascom\TeamleaderApiClient\Model\Aggregate\Tax;
use Nascom\TeamleaderApiClient\Model\Aggregate\Total;
use Nascom\TeamleaderApiClient\Model\Aggregate\UnitPrice;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LineItemFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LineItemFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'product' => ['target_class' => LinkedProduct::class],
            'quantity',
            'description',
            'extended_description',
            'unit_price' => ['target_class' => UnitPrice::class],
            'tax' => ['target_class' => Tax::class],
            'discount' => ['target_class' => Discount::class],
            'total' => ['target_class' => Total::class],
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return LineItem::class;
    }
}
