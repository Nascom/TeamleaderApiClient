<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook;

use Nascom\TeamleaderApiClient\Model\Webhook\Webhook;

/**
 * Class WebhookFieldDescription
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook
 */
class WebhookFieldDescription extends WebhookFieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    public function getTargetClass()
    {
        return Webhook::class;
    }
}
