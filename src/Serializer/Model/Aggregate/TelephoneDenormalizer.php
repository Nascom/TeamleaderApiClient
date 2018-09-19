<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class TelephoneDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Aggregate
 */
class TelephoneDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {
        return new Telephone($data['number'], $data['type']);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === Telephone::class;
    }
}
