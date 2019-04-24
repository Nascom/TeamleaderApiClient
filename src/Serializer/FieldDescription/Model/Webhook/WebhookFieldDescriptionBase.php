<?php

namespace Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionBase;

/**
 * Class WebhookFieldDescriptionBase
 *
 * @package Nascom\TeamleaderApiClient\Serializer\FieldDescription\Model\Webhook
 */
abstract class WebhookFieldDescriptionBase extends FieldDescriptionBase
{
    /**
     * @inheritdoc
     */
    protected function getFieldMapping()
    {
        return [
            'url',
            'types',
        ];
    }
}
