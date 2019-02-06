<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag;

use Nascom\TeamleaderApiClient\Model\Tag\Tag;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TagFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag
 */
class TagFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'tag'
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Tag::class;
    }
}
