<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Company\CompanyListView;

/**
 * Class CompanyListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company
 */
class CompanyListViewFieldDescription extends CompanyFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'primary_address' => ['target_class' => Address::class],
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
        return CompanyListView::class;
    }
}
