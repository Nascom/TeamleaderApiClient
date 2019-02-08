<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\DealSources;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class DealSourcesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\DealSources
 */
class DealSourcesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'dealSources.list';
    }
}
