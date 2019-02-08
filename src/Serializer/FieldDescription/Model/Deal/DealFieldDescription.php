<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use Nascom\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedQuotation;
use Nascom\TeamleaderApiClient\Model\Deal\Deal;

/**
 * Class DealFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Deal
 */
class DealFieldDescription extends DealFieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'phase_history' => ['target_class' => PhaseHistory::class.'[]'],
            'quotations' => ['target_class' => LinkedQuotation::class.'[]'],
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
        ];

        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Deal::class;
    }
}
