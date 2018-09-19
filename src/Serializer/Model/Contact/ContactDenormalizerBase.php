<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Contact;

use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Nascom\TeamleaderApiClient\Serializer\DenormalizerBase;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;

/**
 * Class ContactDenormalizerBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Contact
 */
abstract class ContactDenormalizerBase extends DenormalizerBase implements
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    protected function prepareData($data)
    {
        $data['emails'] = $this->denormalizer->denormalize(
            $data['emails'],
            Email::class . '[]'
        );
        $data['payment_term'] = $this->denormalizer->denormalize(
            $data['payment_term'],
            PaymentTerm::class
        );
        $data['telephones'] = $this->denormalizer->denormalize(
            $data['telephones'],
            Telephone::class . '[]'
        );

        return $data;
    }
}
