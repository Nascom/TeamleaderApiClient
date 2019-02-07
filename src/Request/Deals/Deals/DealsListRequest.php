<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class DealsListRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'deals.list';
    }
}
