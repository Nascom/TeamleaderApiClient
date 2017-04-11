<?php

namespace Nascom\TeamleaderApiClient\Request\Project;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListProjectsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Project
 */
class ListProjectsRequest extends AbstractPostRequest
{
    /**
     * ListProjectsRequest constructor.
     *
     * @param $amount
     * @param $pageno
     * @param array $options
     *   Optional parameters:
     *   - searchby
     *   - show_active_only
     *   - selected_customfields
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
        return 'getProjects.php';
    }
}
