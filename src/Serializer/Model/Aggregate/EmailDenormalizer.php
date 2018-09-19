<?php

namespace Nascom\TeamleaderApiClient\Serializer\Model\Aggregate;

use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class EmailDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\Model\Aggregate
 */
class EmailDenormalizer implements DenormalizerInterface
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
        return new Email($data['email'], $data['type']);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === Email::class;
    }

}
