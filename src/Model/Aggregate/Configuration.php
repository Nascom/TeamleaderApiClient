<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Configuration
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Configuration
{
    /**
     * @var string[]
     */
    private $options;

    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }
}
