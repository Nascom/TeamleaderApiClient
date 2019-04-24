<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

/**
 * Class FieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription
 */
abstract class FieldDescriptionBase implements FieldDescriptionInterface
{
    /**
     * @var CamelCaseToSnakeCaseNameConverter
     */
    protected $camelCaseToSnakeCaseNameConverter;

    /**
     * FieldDescriptionBase constructor.
     */
    public function __construct()
    {
        $this->camelCaseToSnakeCaseNameConverter = new CamelCaseToSnakeCaseNameConverter(null, false);
    }

    /**
     * @inheritdoc
     */
    public function getFields()
    {
        $fields = [];
        foreach ($this->getFieldMapping() as $key => $value) {
            $fields[] = $this->convertToField($key, $value);
        }

        return $fields;
    }

    /**
     * @param string|int $key
     * @param array|string $value
     * @return Field
     */
    protected function convertToField($key, $value) {
        // Set up the defaults.
        $fieldName = is_numeric($key) ? $value : $key;
        $getter = 'get' . $this->toUpperCamelCase($fieldName);
        $setter = 'set' . $this->toUpperCamelCase($fieldName);
        $targetClass = null;

        // If the value is an array, we check if we can replace some defaults.
        if (is_array($value)) {
            $getter = isset($value['getter']) ? $value['getter'] : $getter;
            $setter = isset($value['setter']) ? $value['setter'] : $setter;
            $targetClass = isset($value['target_class'])
                ? $value['target_class']
                : $targetClass;
        }

        return new Field($fieldName, $getter, $setter, $targetClass);
    }

    /**
     * @param $string
     * @return null|string|string[]
     */
    protected function toUpperCamelCase($string)
    {
        return $this->camelCaseToSnakeCaseNameConverter->denormalize($string);
    }

    /**
     * @return array
     */
    abstract protected function getFieldMapping();
}
