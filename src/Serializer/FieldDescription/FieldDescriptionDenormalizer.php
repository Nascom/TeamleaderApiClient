<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Class FieldDescriptionDenormalizer
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription
 */
class FieldDescriptionDenormalizer implements
    DenormalizerInterface,
    NormalizerInterface,
    DenormalizerAwareInterface,
    NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @var FieldDescriptionInterface[]
     */
    private $fieldDescriptions;

    /**
     * FieldDescriptionDenormalizer constructor.
     *
     * @param FieldDescriptionInterface[] $fieldDescriptions
     */
    public function __construct(array $fieldDescriptions)
    {
        $this->fieldDescriptions = $fieldDescriptions;
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
        $fieldDescription = $this->getFieldDescriptionByClassName($class);
        $className = $fieldDescription->getTargetClass();
        $object = new $className;
        foreach ($fieldDescription->getFields() as $field) {
            $fieldName = $field->getName();
            $value = isset($data[$fieldName]) ? $data[$fieldName] : NULL;
            if ($value === null) {
                continue;
            }
            if ($field->getTargetClass() !== null) {
                $value = $this->denormalizer->denormalize(
                    $value,
                    $field->getTargetClass(),
                    $format,
                    $context
                );
            }

            $object->{$field->getSetter()}($value);
        }

        return $object;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $this->getFieldDescriptionByClassName($type) !== null;
    }

    /**
     * @inheritdoc
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $class = get_class($object);
        $fieldDescription = $this->getFieldDescriptionByClassName($class);
        $resultArray = [];
        foreach ($fieldDescription->getFields() as $field) {
            $value = $object->{$field->getGetter()}();
            if ($value === null) {
                continue;
            }
            if ($field->getTargetClass() !== null) {
                $value = $this->normalizer->normalize(
                    $value,
                    $format,
                    $context
                );
            }

            $resultArray[$field->getName()] = $value;
        }

        return $resultArray;
    }

    /**
     * @inheritdoc
     */
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data)
            && $this->getFieldDescriptionByClassName(get_class($data)) !== null;
    }

    /**
     * @param string $className
     * @return FieldDescriptionInterface|null
     */
    protected function getFieldDescriptionByClassName($className)
    {
        foreach ($this->fieldDescriptions as $fieldDescription) {
            if ($fieldDescription->getTargetClass() === $className) {
                return $fieldDescription;
            }
        }

        return null;
    }
}
