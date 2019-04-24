<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Discount;
use Nascom\TeamleaderApiClient\Model\Aggregate\LineItem;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedProduct;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedProductCategory;
use Nascom\TeamleaderApiClient\Model\Aggregate\Tax;
use Nascom\TeamleaderApiClient\Model\Aggregate\CalculatedTotal;
use Nascom\TeamleaderApiClient\Model\Aggregate\UnitPrice;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LineItemFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class LineItemFieldDescription extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'product' => ['target_class' => LinkedProduct::class],
            'product_category' => ['target_class' => LinkedProductCategory::class],
            'quantity',
            'description',
            'extended_description',
            'unit_price' => ['target_class' => UnitPrice::class],
            'tax' => ['target_class' => Tax::class],
            'tax_rate_id',
            'withholding_tax_rate_id',
            'discount' => ['target_class' => Discount::class],
            'total' => ['target_class' => CalculatedTotal::class],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return LineItem::class;
    }
}
