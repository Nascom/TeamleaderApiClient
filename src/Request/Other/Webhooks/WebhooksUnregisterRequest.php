<?php

namespace Nascom\TeamleaderApiClient\Request\Other\Webhooks;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class WebhooksUnregisterRequest
 * @package Nascom\TeamleaderApiClient\Request\Other\Webhooks
 */
class WebhooksUnregisterRequest extends PostRequest
{
    /**
     * WebhooksUnregisterRequest constructor.
     * @param array $webhook
     */
    public function __construct(array $webhook)
    {
        $this->body = $webhook;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'webhooks.unregister';
    }
}
