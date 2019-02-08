<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\ActivityTypes;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class ActivityTypesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Calendar\ActivityTypes
 */
class ActivityTypesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'activityTypes.list';
    }
}
