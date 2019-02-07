<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Model\Deal\Deal;
use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class DealsInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsInfoRequest extends GetRequest
{
    /**
     * DealsInfoRequest constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'deals.info';
    }
}
