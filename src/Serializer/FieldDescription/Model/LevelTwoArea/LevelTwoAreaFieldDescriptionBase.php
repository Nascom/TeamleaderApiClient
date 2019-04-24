<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LevelTwoArea;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class LevelTwoAreaFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LevelTwoArea
 */
abstract class LevelTwoAreaFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'country',
            'name',
        ];
    }
}
