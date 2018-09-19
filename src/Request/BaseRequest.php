<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class BaseRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class BaseRequest implements RequestInterface
{
    /**
     * @var array
     */
    protected $body = [];

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return null;
    }
}
