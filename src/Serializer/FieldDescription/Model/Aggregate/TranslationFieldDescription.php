<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Translation;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TranslationFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class TranslationFieldDescription extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'name',
            'description',
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Translation::class;
    }
}
