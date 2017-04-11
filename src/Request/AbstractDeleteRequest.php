<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class AbstractDeleteRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class AbstractDeleteRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'DELETE';
    }
}
