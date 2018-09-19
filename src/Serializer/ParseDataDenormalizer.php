<?php

namespace Nascom\TeamleaderApiClient\Serializer;

use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Exception\RuntimeException;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ParseDataDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer
 */
class ParseDataDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {
        return $this->denormalizer->denormalize(
            $data['data'],
            $class,
            $format,
            $context
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return isset($data['data']) && count($data) === 1;
    }
}
