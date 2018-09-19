<?php

namespace Nascom\TeamleaderApiClient\Serializer;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

/**
 * Class ObjectMapper
 *
 * @package Symfony\Component\Serializer
 */
class ObjectMapper
{
    protected $propertyNameConverter;
    /**
     * ObjectMapper constructor.
     */
    public function __construct()
    {
        $this->propertyNameConverter = new CamelCaseToSnakeCaseNameConverter(null, false);
    }

    /**
     * @param $data
     * @param $object
     * @return mixed
     */
    public function setFromArray($data, $object)
    {
        if ($data === null) {
            return null;
        }

        foreach ($data as $key => $value) {
            if ($value === null) {
                continue;
            }

            $camelCaseKey = $this->propertyNameConverter->denormalize($key);
            $setter = 'set' . $camelCaseKey;
            if (method_exists($object, $setter)) {
                $object->$setter($value);
            }
        }

        return $object;
    }
}
