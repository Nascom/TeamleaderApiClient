<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\DealPhases;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class DealPhasesListRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\DealPhases
 */
class DealPhasesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'dealPhases.list';
    }
}
