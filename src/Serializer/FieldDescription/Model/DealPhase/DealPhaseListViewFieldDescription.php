<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealPhase;

use Nascom\TeamleaderApiClient\Model\DealPhase\DealPhaseListView;

/**
 * Class DealPhaseListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\DealPhase
 */
class DealPhaseListViewFieldDescription extends DealPhaseFieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return parent::getFieldMapping();
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return DealPhaseListView::class;
    }
}
