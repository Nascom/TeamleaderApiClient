<?php

namespace Nascom\TeamleaderApiClient\Request\Call;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListCallsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Call
 */
class ListCallsRequest extends AbstractPostRequest
{
    /**
     * ListCallsRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param array $options
     *   Optional parameters:
     *   - date_from
     *   - date_to
     *   - project_id
     */
    public function __construct($amount, $pageno, array $options = [])
    {
        $this->options = $options;
        $this->setAmount($amount);
        $this->setPageNo($pageno);
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
    public function setPageNo($pageno)
    {
        $this->options['pageno'] = $pageno;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCalls.php';
    }
}
