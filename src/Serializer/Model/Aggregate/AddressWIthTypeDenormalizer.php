<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Aggregate\AddressWithType;
use Nascom\TeamleaderApiClient\Serializer\DenormalizerBase;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;

/**
 * Class AddressWIthTypeDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Aggregate
 */
class AddressWIthTypeDenormalizer extends DenormalizerBase implements
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    protected function getTargetClass()
    {
        return AddressWithType::class;
    }

    /**
     * @inheritdoc
     */
    protected function prepareData($data)
    {
        $data['address'] = $this->denormalizer->denormalize(
            $data['address'],
            Address::class
        );

        return $data;
    }
}
