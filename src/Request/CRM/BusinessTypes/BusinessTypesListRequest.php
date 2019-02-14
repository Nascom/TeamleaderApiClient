<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\BusinessTypes;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class BusinessTypesListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\LinkedBusinessType
 */
class BusinessTypesListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'businessTypes.list';
    }
}
