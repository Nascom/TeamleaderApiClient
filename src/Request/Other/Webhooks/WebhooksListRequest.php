<?php

namespace Nascom\TeamleaderApiClient\Request\Other\Webhooks;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class WebhooksListRequest
 * @package Nascom\TeamleaderApiClient\Request\Other\Webhooks
 */
class WebhooksListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'webhooks.list';
    }
}
