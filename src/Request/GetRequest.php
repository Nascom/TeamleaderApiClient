<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class GetRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class GetRequest extends BaseRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'GET';
    }
}
