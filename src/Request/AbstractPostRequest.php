<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class AbstractPostRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class AbstractPostRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'POST';
    }
}
