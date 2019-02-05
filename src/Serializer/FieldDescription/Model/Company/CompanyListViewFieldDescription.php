<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Company\CompanyListView;

/**
 * Class CompanyListViewFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company
 */
class CompanyListViewFieldDescription extends CompanyFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'primary_address' => ['target_class' => Address::class],
        ];

        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return CompanyListView::class;
    }
}
