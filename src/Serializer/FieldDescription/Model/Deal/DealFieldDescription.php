<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use Nascom\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedQuotation;
use Nascom\TeamleaderApiClient\Model\Deal\Deal;

/**
 * Class DealFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal
 */
class DealFieldDescription extends DealFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'phase_history' => ['target_class' => PhaseHistory::class.'[]'],
            'quotations' => ['target_class' => LinkedQuotation::class.'[]'],
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
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
        return Deal::class;
    }
}
