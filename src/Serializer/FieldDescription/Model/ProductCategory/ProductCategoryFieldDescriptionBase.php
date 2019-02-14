<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ProductCategory;

use Nascom\TeamleaderApiClient\Model\Aggregate\Ledger;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ProductCategoryFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\ProductCategory
 */
abstract class ProductCategoryFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'name',
            'ledgers' => ['target_class' => Ledger::class.'[]'],
        ];
    }
}
