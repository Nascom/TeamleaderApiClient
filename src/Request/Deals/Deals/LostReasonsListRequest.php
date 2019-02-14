<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class LostReasonsListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class LostReasonsListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return'lostReasons.list';
    }
}
