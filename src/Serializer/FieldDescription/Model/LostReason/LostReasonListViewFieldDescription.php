<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LostReason;

use Nascom\TeamleaderApiClient\Model\LostReason\LostReasonListView;

/**
 * Class LostReasonListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\LostReason
 */
class LostReasonListViewFieldDescription extends LostReasonFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return LostReasonListView::class;
    }
}
