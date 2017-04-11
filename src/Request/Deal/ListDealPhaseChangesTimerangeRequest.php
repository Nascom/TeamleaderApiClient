<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListDealPhaseChangesTimerangeRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class ListDealPhaseChangesTimerangeRequest extends AbstractPostRequest
{
    /**
     * ListDealPhaseChangesTimerangeRequest constructor.
     *
     * @param $date_from
     * @param $date_to
     * @param array $options
     */
    public function __construct($date_from, $date_to, array $options = [])
    {
        $this->options = $options;
        $this->setDateFrom($date_from);
        $this->setDateTo($date_to);
    }

    /**
     * @param $date_from
     */
    public function setDateFrom($date_from)
    {
        $this->options['date_from'] = $date_from;
    }

    /**
     * @param $date_to
     */
    public function setDateTo($date_to)
    {
        $this->options['date_to'] = $date_to;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getAllDealPhaseChanges.php';
    }
}
