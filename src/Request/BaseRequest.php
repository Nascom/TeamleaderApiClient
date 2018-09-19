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
     * @inheritdoc
     */
    public function getOptions()
    {
        return [];
    }
}
