<?php

namespace Nascom\TeamleaderApiClient\Model\CustomFieldDefinition;

use Nascom\TeamleaderApiClient\Model\Aggregate\Configuration;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class CustomFieldDefinitionBase
 * @package Nascom\TeamleaderApiClient\Model\CustomFieldDefinition
 */
class CustomFieldDefinitionBase extends ModelBase
{
    /**
     * @var string
     */
    private $context;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $group;

    /**
     * @var boolean
     */
    private $required;

    /**
     * @var Configuration
     */
    private $configuration = [];

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }
}
