<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsMoveRequest
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsMoveRequest extends PostRequest
{
    /**
     * DealsMoveRequest constructor.
     * @param string $id
     * @param string $phaseId
     */
    public function __construct($id, $phaseId)
    {
        $this->body['id'] = $id;
        $this->body['phase_id'] = $phaseId;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'deals.move';
    }
}
