<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListDealsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class ListDealsRequest extends AbstractPostRequest
{
    /**
     * ListDealsRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param array $options
     *   Optional parameters:
     *   - searchby
     *   - selected_customfields
     *   - filter_by_phase_id
     *   - segment_id
     */
    public function __construct($amount, $pageno, array $options = [])
    {
        $this->options = $options;
        $this->setAmount($amount);
        $this->setPageno($pageno);
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
     * @return string
     */
    public function getUri()
    {
        return 'getDeals.php';
    }
}
