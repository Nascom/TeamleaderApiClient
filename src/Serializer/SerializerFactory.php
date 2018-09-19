<?php

namespace Nascom\TeamleaderApiClient\Serializer;

use Nascom\TeamleaderApiClient\Serializer\Model;
use Nascom\TeamleaderApiClient\Serializer\Model\Aggregate;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
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
        $objectMapper = new ObjectMapper();

        $normalizers = [
            new ParseDataDenormalizer(),
            new Model\UserDenormalizer($objectMapper),
            new Model\Contact\ContactListViewDenormalizer($objectMapper),
            new Model\Contact\ContactDenormalizer($objectMapper),
            new Aggregate\AccountDenormalizer(),
            new Aggregate\TelephoneDenormalizer(),
            new Aggregate\AddressDenormalizer($objectMapper),
            new Aggregate\EmailDenormalizer(),
            new Aggregate\PaymentTermDenormalizer(),
            new Aggregate\AddressWIthTypeDenormalizer($objectMapper),
            new ArrayDenormalizer()
        ];
        $encoders = [
            new JsonEncoder()
        ];

        return new Serializer($normalizers, $encoders);
    }
}
