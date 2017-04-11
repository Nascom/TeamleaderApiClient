<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListSubscriptionsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class ListSubscriptionsRequest extends AbstractPostRequest
{
    /**
     * ListSubscriptionsRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param $selected_customfields
     * @param array $options
     *   Optional parameters:
     *   - searchby
     */
    public function __construct($amount, $pageno, $selected_customfields, array $options = [])
    {
        $this->options = $options;
        $this->setAmount($amount);
        $this->setPageno($pageno);
        $this->setSelectedCustomfields($selected_customfields);
    }

    /**
     * @param $amount
     */
    public function setAmount($amount)
    {
        $this->options['amount'] = $amount;
    }

    /**
     * @param $pageno
     */
    public function setPageno($pageno)
    {
        $this->options['pageno'] = $pageno;
    }

    /**
     * @param $selected_customfields
     */
    public function setSelectedCustomfields($selected_customfields)
    {
        $this->options['selected_customfields'] = $selected_customfields;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getSubscriptions.php';
    }
}
