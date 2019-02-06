<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\BusinessTypes;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class BusinessTypesListRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\BusinessTypes
 */
class BusinessTypesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'businessTypes.list';
    }
}
