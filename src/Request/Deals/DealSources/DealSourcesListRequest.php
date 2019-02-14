<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\DealSources;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealSourcesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\DealSources
 */
class DealSourcesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'dealSources.list';
    }
}
