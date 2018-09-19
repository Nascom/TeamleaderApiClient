<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class PostRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class PostRequest extends BaseRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'POST';
    }
}
