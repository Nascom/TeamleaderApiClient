<?php

namespace Nascom\TeamleaderApiClient\Request\Other\Webhooks;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class WebhooksListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Other\Webhooks
 */
class WebhooksListRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'webhooks.list';
    }
}
