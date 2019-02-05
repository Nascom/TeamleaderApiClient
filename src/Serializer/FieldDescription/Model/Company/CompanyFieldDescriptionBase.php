<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\Account;
use Nascom\TeamleaderApiClient\Model\Aggregate\BusinessType;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\InvoicingPreference;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class CompanyFieldDescriptionBase
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Company
 */
abstract class CompanyFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @return array
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'name',
            'business_type' => ['target_class' => BusinessType::class],
            'vat_number',
            'national_identification_number',
            'emails' => ['target_class' => Email::class.'[]'],
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'website',
            'iban',
            'bic',
            'language',
            'preferred_currency',
            'payment_term' => ['target_class' => PaymentTerm::class],
            'invoicing_preferences' => ['target_class' => InvoicingPreference::class],
            'responsible_user' => ['target_class' => Account::class],
            'added_at' => ['target_class' => \DateTime::class],
            'updated_at' => ['target_class' => \DateTime::class],
            'web_url',
            'tags',
        ];
    }
}
