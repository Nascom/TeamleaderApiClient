<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Configuration
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Configuration
{
    private $options = [];

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }
}
