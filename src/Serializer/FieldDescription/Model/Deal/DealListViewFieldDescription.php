<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedPhase;
use Nascom\TeamleaderApiClient\Model\Deal\DealListView;

/**
 * Class DealListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal
 */
class DealListViewFieldDescription extends DealFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'current_phase' => ['target_class' => LinkedPhase::class],
        ];

        return array_merge(
            parent::getFieldMapping(),
            $fields
        );
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return DealListView::class;
    }
}
