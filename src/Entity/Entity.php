<?php
namespace Nascom\TeamleaderApiClient\Entity;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\CustomNormalizer;
use Symfony\Component\Serializer\Serializer;

class Entity extends \ArrayObject
{
    /**
     * @param string                      $key
     * @param string|int|float|array|bool $default
     *
     * @return mixed
     */
    protected function getEntityValue($key, $default)
    {
        return isset($this[$key]) ? $this[$key] : $default;
    }
    /**
     * Returns the json representation of the current object.
     *
     * @return string
     */
    public function json()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new CustomNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        return $serializer->serialize($this, 'json');
    }
}
