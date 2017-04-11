<?php

namespace Nascom\TeamleaderApiClient\Request\Invoice;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListInvoicesRelatedToDealRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Invoice
 */
class ListInvoicesRelatedToDealRequest extends AbstractPostRequest
{
    /**
     * ListInvoicesRelatedToDealRequest constructor.
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
        return 'getInvoicesByDeal.php';
    }
}
