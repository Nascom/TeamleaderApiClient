<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Contact;
use Nascom\TeamleaderApiClient\Serializer\DenormalizerBase;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;

/**
 * Class ContactDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model
 */
class ContactDenormalizer extends DenormalizerBase implements
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    protected function getTargetClass()
    {
        return Contact::class;
    }

    /**
     * @inheritdoc
     */
    protected function prepareData($data)
    {
        $data['emails'] = $this->denormalizer->denormalize(
            $data['emails'],
            Email::class . '[]'
        );
        $data['address'] = $this->denormalizer->denormalize(
            $data['address'],
            Address::class
        );
        $data['primary_address'] = $this->denormalizer->denormalize(
            $data['primary_address'],
            Address::class
        );
        $data['payment_term'] = $this->denormalizer->denormalize(
            $data['payment_term'],
            PaymentTerm::class
        );

        return $data;
    }
}
