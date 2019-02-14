<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LevelTwoArea;

use Nascom\TeamleaderApiClient\Model\LevelTwoArea\LevelTwoAreaListView;

/**
 * Class LevelTwoAreaListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LevelTwoArea
 */
class LevelTwoAreaListViewFieldDescription extends LevelTwoAreaFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return LevelTwoAreaListView::class;
    }
}
