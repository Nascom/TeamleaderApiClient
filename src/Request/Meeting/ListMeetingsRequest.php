<?php

namespace Nascom\TeamleaderApiClient\Request\Meeting;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListMeetingsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Meeting
 */
class ListMeetingsRequest extends AbstractPostRequest
{
    /**
     * ListMeetingsRequest constructor.
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
        return 'getMeetings.php';
    }
}
