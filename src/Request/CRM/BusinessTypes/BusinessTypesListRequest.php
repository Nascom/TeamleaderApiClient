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
     * BusinessTypesListRequest constructor.
     *
     * @param string|null $country
     */
    public function __construct($country = null)
    {
        $this->body['country'] = $country;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'businessTypes.list';
    }
}
