<?php

namespace Nascom\TeamleaderApiClient\Model\Webhook;

use function PHPSTORM_META\type;

/**
 * Class WebhookBase
 * @package Nascom\TeamleaderApiClient\Model\Webhook
 */
abstract class WebhookBase
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string[]
     */
    private $types;

    /**
     * WebhookBase constructor.
     * @param string|null $url
     * @param array|null $types
     */
    public function __construct($url = null, array $types = null)
    {
        $this->url = $url;
        $this->types = $types;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param string[] $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }
}
