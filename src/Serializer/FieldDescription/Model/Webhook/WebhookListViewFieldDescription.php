<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook;

use Nascom\TeamleaderApiClient\Model\Webhook\WebhookListView;

/**
 * Class WebhookListViewFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook
 */
class WebhookListViewFieldDescription extends WebhookFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return WebhookListView::class;
    }
}
