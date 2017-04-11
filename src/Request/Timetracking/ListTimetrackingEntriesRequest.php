<?php

namespace Nascom\TeamleaderApiClient\Request\Timetracking;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListTimetrackingEntriesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Timetracking
 */
class ListTimetrackingEntriesRequest extends AbstractPostRequest
{
    /**
     * ListTimetrackingEntriesRequest constructor.
     *
     * @param $dateFrom
     * @param $dateTo
     * @param array $options
     *   Optional parameters:
     *   - user_id
     *   - project_id
     *   - company_id
     *   - contact_id
     */
    public function __construct($dateFrom, $dateTo, array $options = [])
    {
        $this->options = $options;
        $this->setDateFrom($dateFrom);
        $this->setDateTo($dateTo);
    }

    /**
     * @param $dateFromm
     */
    public function setDateFrom($dateFromm)
    {
        $this->options['date_from'] = $dateFromm;
    }

    /**
     * @param $dateTo
     */
    public function setDateTo($dateTo)
    {
        $this->options['date_to'] = $dateTo;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTimetracking.php';
    }
}
