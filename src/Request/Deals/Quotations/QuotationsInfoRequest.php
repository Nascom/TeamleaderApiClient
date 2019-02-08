<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Quotations;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class QuotationsInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals
 */
class QuotationsInfoRequest extends GetRequest
{
    /**
     * QuotationsInfoRequest constructor.
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
        return 'quotations.info';
    }
}
