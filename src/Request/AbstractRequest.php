<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class AbstractRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class AbstractRequest implements RequestInterface
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @inheritdoc
     */
    abstract public function getUri();

    /**
     * @inheritdoc
     */
    abstract public function getMethod();

    /**
     * @inheritdoc
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @inheritdoc
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
