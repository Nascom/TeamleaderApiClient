<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateSubscriptionRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class UpdateSubscriptionRequest extends AbstractPostRequest
{
    /**
     * UpdateSubscriptionRequest constructor.
     *
     * @param $subscription_id
     * @param array $options
     *   Optional parameters:
     *   - date_start
     *   - repeat_after
     *   - custom_field_ID
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
        return 'updateSubscription.php';
    }
}
