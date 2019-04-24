<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WithholdingTaxRate;

use Nascom\TeamleaderApiClient\Model\WithholdingTaxRate\WithholdingTaxRateListView;

/**
 * Class WithholdingTaxRateListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\WithholdingTaxRate
 */
class WithholdingTaxRateListViewFieldDescription extends WithholdingTaxRateFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return WithholdingTaxRateListView::class;
    }
}
