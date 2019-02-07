<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag;

use Nascom\TeamleaderApiClient\Model\Tag\TagListView;

/**
 * Class TagListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Tag
 */
class TagListViewFieldDescription extends TagFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        return parent::getFieldMapping();
    }

    public function getTargetClass()
    {
        return TagListView::class;
    }
}
