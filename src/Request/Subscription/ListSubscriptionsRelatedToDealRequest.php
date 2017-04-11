<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListSubscriptionsRelatedToDealRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class ListSubscriptionsRelatedToDealRequest extends AbstractPostRequest
{
    /**
     * ListSubscriptionsRelatedToDealRequest constructor.
     *
     * @param $deal_id
     * @param array $options
     */
    public function __construct($deal_id, array $options = [])
    {
        $this->options = $options;
        $this->setDealId($deal_id);
    }

    /**
     * @param $deal_id
     */
    public function setDealId($deal_id)
    {
        $this->options['deal_id'] = $deal_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getSubscriptionsByDeal.php';
    }
}
