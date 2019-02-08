<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\GroupedLine;
use Nascom\TeamleaderApiClient\Model\Aggregate\LineItem;
use Nascom\TeamleaderApiClient\Model\Aggregate\Section;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class GroupedLineFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Aggregate
 */
class GroupedLineFieldDescription extends FieldDescriptionBase
{

    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'section' => ['target_class' => Section::class],
            'line_items' => ['target_class' => LineItem::class.'[]'],
        ];
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return GroupedLine::class;
    }
}
