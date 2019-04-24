<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsMoveRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsMoveRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsMoveRequest constructor.
     *
     * @param string $id
     * @param string $phaseId
     */
    public function __construct($id, $phaseId)
    {
        $this->body['id'] = $id;
        $this->body['phase_id'] = $phaseId;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'deals.move';
    }
}
