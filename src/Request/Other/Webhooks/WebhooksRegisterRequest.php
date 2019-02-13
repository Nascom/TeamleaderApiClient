<?php

namespace Nascom\TeamleaderApiClient\Request\Other\Webhooks;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class WebhooksRegisterRequest
 * @package Nascom\TeamleaderApiClient\Request\Other\Webhooks
 */
class WebhooksRegisterRequest extends PostRequest
{
    /**
     * WebhooksRegisterRequest constructor.
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
        return 'webhooks.register';
    }
}
