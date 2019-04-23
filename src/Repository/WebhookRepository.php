<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Webhook\Webhook;
use Nascom\TeamleaderApiClient\Model\Webhook\WebhookListView;
use Nascom\TeamleaderApiClient\Request\Other\Webhooks\WebhooksListRequest;
use Nascom\TeamleaderApiClient\Request\Other\Webhooks\WebhooksRegisterRequest;
use Nascom\TeamleaderApiClient\Request\Other\Webhooks\WebhooksUnregisterRequest;

/**
 * Class WebhookRepository
 *
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
        $request = new WebhooksListRequest();
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            WebhookListView::class . '[]'
        );
    }

    /**
     * @param Webhook $webhook
     *
     * @throws \Http\Client\Exception
     */
    public function registerWebhook(Webhook $webhook)
    {
        $request = new WebhooksRegisterRequest($this->normalize($webhook));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }

    /**
     * @param Webhook $webhook
     *
     * @throws \Http\Client\Exception
     */
    public function unRegisterWebHook(Webhook $webhook)
    {
        $request = new WebhooksUnregisterRequest($this->normalize($webhook));
        $request->setMethod('POST');

        $this->apiClient->handle($request);
    }
}
