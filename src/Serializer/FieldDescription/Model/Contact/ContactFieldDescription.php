<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Model\Contact\Contact;

/**
 * Class ContactFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact
 */
class ContactFieldDescription extends ContactFieldDescriptionBase
{
    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'addresses' => ['target_class' => AddressWithType::class.'[]'],
//            'companies' => ['target_class' => '@todo']
            'remarks',
//            'custom_fields' => ['target_class' => '@todo']
            'marketing_mails_consent' => ['getter' => 'hasMarketingMailsConsent'],
        ];

        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Contact::class;
    }
}
