<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Model\Aggregate\CompanyEmployee;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use Nascom\TeamleaderApiClient\Model\Contact\Contact;

/**
 * Class ContactFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact
 */
class ContactFieldDescription extends ContactFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        $fields = [
            'addresses' => ['target_class' => AddressWithType::class.'[]'],
            'companies' => ['target_class' => CompanyEmployee::class.'[]'],
            'remarks',
            'custom_fields' => ['target_class' => LinkedCustomField::class.'[]'],
            'marketing_mails_consent' => ['getter' => 'hasMarketingMailsConsent'],
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
        return Contact::class;
    }
}
