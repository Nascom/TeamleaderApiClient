<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class DeleteSubscriptionRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class DeleteSubscriptionRequest extends AbstractPostRequest
{
    /**
     * DeleteSubscriptionRequest constructor.
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
        return 'deleteSubscription.php';
    }
}
