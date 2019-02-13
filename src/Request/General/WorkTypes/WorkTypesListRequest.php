<?php

namespace Nascom\TeamleaderApiClient\Request\General\WorkTypes;

use Nascom\TeamleaderApiClient\Request\BaseRequest;

/**
 * Class WorkTypesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\WorkType
 */
class WorkTypesListRequest extends BaseRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'workTypes.list';
    }
}
