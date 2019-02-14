<?php

namespace Nascom\TeamleaderApiClient\Request\Calendar\ActivityTypes;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class ActivityTypesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Calendar\ActivityTypes
 */
class ActivityTypesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'activityTypes.list';
    }
}
