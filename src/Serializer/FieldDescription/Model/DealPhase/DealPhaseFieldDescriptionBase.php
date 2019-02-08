<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealPhase;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class DealPhaseFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealPhase
 */
abstract class DealPhaseFieldDescriptionBase extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
        ];
    }
}
