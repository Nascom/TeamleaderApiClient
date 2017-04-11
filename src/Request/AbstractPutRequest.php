<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class AbstractPutRequest
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class AbstractPutRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'PUT';
    }
}
