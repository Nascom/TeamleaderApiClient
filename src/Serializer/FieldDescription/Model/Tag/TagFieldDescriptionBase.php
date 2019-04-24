<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag;

use Nascom\TeamleaderApiClient\Model\Tag\TagBase;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class TagFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\TagBase
 */
abstract class TagFieldDescriptionBase extends FieldDescriptionBase
{

    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'tag'
        ];
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return TagBase::class;
    }
}
