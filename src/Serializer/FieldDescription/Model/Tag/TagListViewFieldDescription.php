<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag;

use Nascom\TeamleaderApiClient\Model\Tag\TagListView;

/**
 * Class TagListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag
 */
class TagListViewFieldDescription extends TagFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return TagListView::class;
    }
}
