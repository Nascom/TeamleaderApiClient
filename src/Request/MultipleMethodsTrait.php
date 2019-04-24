<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Trait MultipleMethodsTrait
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
trait MultipleMethodsTrait {
    /**
     * @var string|null
     */
    protected $method;

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return null|string
     */
    public function getMethod()
    {
        return $this->method ?: parent::getMethod();
    }
}
