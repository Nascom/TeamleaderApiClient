<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\DealPhases;

use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Filter\FilterTrait;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageInterface;
use Nascom\TeamleaderApiClient\Request\Attributes\Page\PageTrait;
use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealPhasesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\DealPhases
 */
class DealPhasesListRequest extends GetRequest implements FilterInterface, PageInterface
{
    use MultipleMethodsTrait, FilterTrait, PageTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'dealPhases.list';
    }
}
