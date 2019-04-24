<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Quotations;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class QuotationsInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals
 */
class QuotationsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * QuotationsInfoRequest constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'quotations.info';
    }
}
