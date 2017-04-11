<?php

namespace Nascom\TeamleaderApiClient\Request\Planning;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListPlannedTasksRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Planning
 */
class ListPlannedTasksRequest extends AbstractPostRequest
{
    /**
     * ListPlannedTasksRequest constructor.
     *
     * @param $date_from
     * @param $date_to
     * @param array $options
     *   Optional parameters:
     *   - user_id
     *   - project_id
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
        return 'getPlannedTasks.php';
    }
}
