<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class DownloadedFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
abstract class DownloadedFieldDescriptionBase extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'location',
            'expires' => ['target_class' => \DateTime::class],
        ];
    }
}
