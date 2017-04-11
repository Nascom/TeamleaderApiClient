<?php

namespace Nascom\TeamleaderApiClient\Request\Company;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListCompaniesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Company
 */
class ListCompaniesRequest extends AbstractPostRequest
{
    /**
     * ListCompaniesRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param array $options
     *   Optional parameters:
     *   - searchby
     *   - modifiedsince
     *   - filter_by_tag
     *   - segment_id
     *   - selected_customfields
     */
    public function __construct($amount, $pageno, array $options = [])
    {
        $this->options = $options;
        $this->setPageno($pageno);
        $this->setAmount($amount);
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
        $this->option['pageno'] = $pageno;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getCompanies.php';
    }
}
