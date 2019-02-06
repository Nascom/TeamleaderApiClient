<?php

namespace Nascom\TeamleaderApiClient\Request\General\WorkTypes;

use Nascom\TeamleaderApiClient\Request\BaseRequest;

/**
 * Class WorkTypesListRequest
 * @package Nascom\TeamleaderApiClient\Request\General\WorkTypes
 */
class WorkTypesListRequest extends BaseRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'workTypes.list';
    }
}
