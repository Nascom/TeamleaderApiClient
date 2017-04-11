<?php

namespace Nascom\TeamleaderApiClient\Request;

/**
 * Class AbstractGetQuery
 *
 * @package Nascom\TeamleaderApiClient\Request
 */
abstract class AbstractGetRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'GET';
    }
}
