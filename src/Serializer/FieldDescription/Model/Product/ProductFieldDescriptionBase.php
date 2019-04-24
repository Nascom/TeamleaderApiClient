<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Product;

use Nascom\TeamleaderApiClient\Model\Aggregate\Translation;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ProductFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Product
 */
abstract class ProductFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'translations' => ['target_class' => Translation::class.'[]'],
            'external_id',
        ];
    }
}
