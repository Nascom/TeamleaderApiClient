<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\PaymentTerm;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class PaymentTermDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Aggregate
 */
class PaymentTermDenormalizer implements DenormalizerInterface
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
        if ($data === null) {
            return null;
        }

        return new PaymentTerm($data['type']);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === PaymentTerm::class;
    }
}
