<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use Nascom\TeamleaderApiClient\Model\Company\Company;

/**
 * Class CompanyFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company
 */
class CompanyFieldDescription extends CompanyFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'addresses' => ['target_class' => AddressWithType::class.'[]'],
            'remarks',
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
            'marketing_mails_consent',
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
        return Company::class;
    }
}
