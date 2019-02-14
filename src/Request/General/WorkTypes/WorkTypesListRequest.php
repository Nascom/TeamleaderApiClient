<?php

namespace Nascom\TeamleaderApiClient\Request\General\WorkTypes;

use Nascom\TeamleaderApiClient\Request\BaseRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class WorkTypesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\WorkType
 */
class WorkTypesListRequest extends BaseRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'workTypes.list';
    }
}
