<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription;

/**
 * Class Field
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription
 */
class Field
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $targetClass;

    /**
     * @var string
     */
    private $setter;

    /**
     * @var string
     */
    private $getter;

    /**
     * Field constructor.
     *
     * @param string $name
     * @param string|null $targetClass
     * @param string|null $setter
     * @param string|null $getter
     */
    public function __construct(
        $name,
        $getter = null,
        $setter = null,
        $targetClass = null
    ) {
        $this->name = $name;
        $this->getter = $getter;
        $this->setter = $setter;
        $this->targetClass = $targetClass;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTargetClass()
    {
        return $this->targetClass;
    }

    /**
     * @return string
     */
    public function getSetter()
    {
        return $this->setter;
    }

    /**
     * @return string
     */
    public function getGetter()
    {
        return $this->getter;
    }
}
