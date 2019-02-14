<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\DealPhases;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealPhasesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\DealPhases
 */
class DealPhasesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'dealPhases.list';
    }
}
