<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Model\Aggregate\CustomField;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCompany;
use Nascom\TeamleaderApiClient\Model\Contact\ContactBase;
use Nascom\TeamleaderApiClient\Model\Contact\ContactPost;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ContactPostFieldDescription
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact
 */
class ContactPostFieldDescription extends ContactFieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        $parentFields = parent::getFieldMapping();
        $additionalFields = [
            'addresses' => ['target_class' => AddressWithType::class.'[]'],
            'companies' => ['target_class' => LinkedCompany::class.'[]'],
            'remarks',
            'custom_fields' => ['target_class' => CustomField::class.'[]'],
            'marketing_mails_consent' => ['getter' => 'hasMarketingMailsConsent'],
        ];
        return array_merge($parentFields, $additionalFields);
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
return ContactPost::class;    }
}
