<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsWinRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsWinRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsWinRequest constructor.
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
        return 'deals.win';
    }
}
