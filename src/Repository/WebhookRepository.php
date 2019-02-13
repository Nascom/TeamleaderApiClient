<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Webhook\Webhook;
use Nascom\TeamleaderApiClient\Model\Webhook\WebhookListView;
use Nascom\TeamleaderApiClient\Request\Other\Webhooks\WebhooksListRequest;
use Nascom\TeamleaderApiClient\Request\Other\Webhooks\WebhooksRegisterRequest;
use Nascom\TeamleaderApiClient\Request\Other\Webhooks\WebhooksUnregisterRequest;

/**
 * Class WebhookRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WebhookRepository extends RepositoryBase
{
    /**
     * @return WebhookListView[]
     * @throws \Http\Client\Exception
     */
    public function listWebhooks()
    {
        return $this->handleRequest
        (
            new WebhooksListRequest(),
            WebhookListView::class.'[]'
        );
    }

    /**
     * @param Webhook $webhook
     * @throws \Http\Client\Exception
     */
    public function registerWebhook(Webhook $webhook)
    {
        $this->apiClient->handle
        (
            new WebhooksRegisterRequest($this->normalize($webhook))
        );
    }

    /**
     * @param Webhook $webhook
     * @throws \Http\Client\Exception
     */
    public function unRegisterWebHook(Webhook $webhook)
    {
        $this->apiClient->handle
        (
            new WebhooksUnregisterRequest($this->normalize($webhook))
        );
    }
}
