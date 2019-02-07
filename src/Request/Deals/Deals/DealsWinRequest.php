<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsWinRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsWinRequest extends PostRequest
{
    /**
     * DealsWinRequest constructor.
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
        return 'deals.win';
    }
}
