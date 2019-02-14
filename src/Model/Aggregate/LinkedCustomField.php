<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class LinkedCustomField
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class LinkedCustomField
{
    /**
     * @var LinkedDefinition
     */
    private $definition;

    /**
     * @var string
     */
    private $value;

    /**
     * @return LinkedDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param LinkedDefinition $definition
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}
