<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveSubscriptionRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class RetrieveSubscriptionRequest extends AbstractPostRequest
{
    /**
     * RetrieveSubscriptionRequest constructor.
     *
     * @param $subscription_id
     * @param array $options
     */
    public function __construct($subscription_id, array $options = [])
    {
        $this->options = $options;
        $this->setSubscriptionId($subscription_id);
    }

    /**
     * @param $subscription_id
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->options['subscription_id'] = $subscription_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getSubscription.php';
    }
}
