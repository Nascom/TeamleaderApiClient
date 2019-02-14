<?php

namespace Nascom\TeamleaderApiClient\Request\Deals\Deals;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class DealsLoseRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deals\Deals
 */
class DealsLoseRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * DealsLoseRequest constructor.
     *
     * @param string $id
     * @param string|null $reasonId
     * @param string|null $extraInfo
     */
    public function __construct($id, $reasonId, $extraInfo)
    {
        $this->body['id'] = $id;
        $this->body['reason_id'] = $reasonId;
        $this->body['extra_info'] =  $extraInfo;

        $this->body = array_filter($this->body, function ($value) {
            return !empty($value);
        });
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'deals.lose';
    }
}
