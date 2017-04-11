<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListInvoicesBySubscriptionRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class ListInvoicesBySubscriptionRequest extends AbstractPostRequest
{
    /**
     * ListInvoicesBySubscriptionRequest constructor.
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
        return 'getInvoicesBySubscription.php';
    }
}
