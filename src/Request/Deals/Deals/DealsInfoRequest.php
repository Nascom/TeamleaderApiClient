<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class DealsInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsInfoRequest constructor.
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
        return 'deals.info';
    }
}
