<?php

namespace Nascom\TeamleaderApiClient\Request\General\WorkType;

use Nascom\TeamleaderApiClient\Request\BaseRequest;

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
