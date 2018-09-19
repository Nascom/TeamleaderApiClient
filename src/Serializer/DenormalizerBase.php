<?php

namespace Nascom\TeamleaderApiClient\Serializer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class DenormalizerBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer
 */
abstract class DenormalizerBase implements DenormalizerInterface
{
    /**
     * @var ObjectMapper
     */
    protected $objectMapper;

    /**
     * UserDenormalizer constructor.
     *
     * @param ObjectMapper $objectMapper
     */
    public function __construct(ObjectMapper $objectMapper)
    {
        $this->objectMapper = $objectMapper;
    }

    /**
     * @inheritdoc
     */
    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {
        $className = $this->getTargetClass();
        $object = new $className();
        $data = $this->prepareData($data);

        return $this->objectMapper->setFromArray($data, $object);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === $this->getTargetClass();
    }

    /**
     * @return string
     */
    abstract protected function getTargetClass();

    /**
     * Allows to alter the data before it is set on the target object.
     *
     * @param array $data
     * @return array
     */
    protected function prepareData($data)
    {
        return $data;
    }
}
