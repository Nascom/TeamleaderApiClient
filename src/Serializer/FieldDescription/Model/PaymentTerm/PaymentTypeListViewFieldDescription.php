<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\PaymentTerm;

use Nascom\TeamleaderApiClient\Model\PaymentTerm\PaymentTermListView;

/**
 * Class PaymentTypeListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\PaymentTerm
 */
class PaymentTypeListViewFieldDescription extends PaymentTermFieldDescriptionBase
{
    /**
     * @return string
     */
    public function getTargetClass()
    {
        return PaymentTermListView::class;
    }
}
