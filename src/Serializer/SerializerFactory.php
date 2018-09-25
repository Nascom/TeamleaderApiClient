<?php

namespace Nascom\TeamleaderApiClient\Serializer;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionDenormalizer;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class SerializerFactory
 *
 * @package Nascom\TeamleaderApiClient\Serializer
 */
class SerializerFactory
{
    /**
     * @return Serializer
     */
    public static function create()
    {
        $fieldDescriptionDenormalizer = new FieldDescriptionDenormalizer([
            // Models
            new FieldDescription\Model\User\UserFieldDescription(),
            new FieldDescription\Model\Contact\ContactListViewFieldDescription(),
            new FieldDescription\Model\Contact\ContactFieldDescription(),

            // Aggregates
            new FieldDescription\Model\Aggregate\AccountFieldDescription(),
            new FieldDescription\Model\Aggregate\TelephoneFieldDescription(),
            new FieldDescription\Model\Aggregate\EmailFieldDescription(),
            new FieldDescription\Model\Aggregate\AddressFieldDescription(),
            new FieldDescription\Model\Aggregate\AddressWithTypeFieldDescription()
        ]);

        $normalizers = [
            new DateTimeNormalizer(),
            new ParseDataDenormalizer(),
            $fieldDescriptionDenormalizer,
            new ArrayDenormalizer()
        ];
        $encoders = [
            new JsonEncoder()
        ];

        return new Serializer($normalizers, $encoders);
    }
}
