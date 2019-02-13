<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact;

use DateTime;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class ContactFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Contact
 */
abstract class ContactFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'id',
            'first_name',
            'last_name',
            'salutation',
            'emails' => ['target_class' => Email::class.'[]'],
            'telephones' => ['target_class' => Telephone::class.'[]'],
            'website',
            'gender',
            'birthdate' => ['target_class' => DateTime::class],
            'iban',
            'bic',
            'language',
            'payment_term' => ['target_class' => PaymentTerm::class],
            'tags',
            'added_at' => ['target_class' => DateTime::class],
            'updated_at' => ['target_class' => DateTime::class],
            'web_url',
        ];
    }
}
