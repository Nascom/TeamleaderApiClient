<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\Addresses;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use Nascom\TeamleaderApiClient\Model\Company\Company;
use Nascom\TeamleaderApiClient\Model\CustomFieldDefinition\CustomFieldDefinition;

/**
 * Class CompanyFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company
 */
class CompanyFieldDescription extends CompanyFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'addresses' => ['target_class' => Addresses::class.'[]'],
            'remarks',
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
            'marketing_mails_consent',
        ];
        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return Company::class;
    }
}
