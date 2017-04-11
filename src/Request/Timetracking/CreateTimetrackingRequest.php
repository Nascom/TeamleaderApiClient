<?php

namespace Nascom\TeamleaderApiClient\Request\Timetracking;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateTimetrackingRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Timetracking
 */
class CreateTimetrackingRequest extends AbstractPostRequest
{
    /**
     * CreateTimetrackingRequest constructor.
     *
     * @param $description
     * @param $start_date
     * @param $end_date
     * @param $worker_id
     * @param $task_type_id
     * @param array $options
     *   Extra parameters for adding additional costs (optional):
     *   - description_1
     *   - price_1
     *   - amount_1
     *   - vat_1
     *   - product_id_1
     *   - subtitle_1

     *   - description_2
     *   - price_2
     *   - ...
     *
     *   Optional parameters:
     *   - for
     *   - for_id
     *   - invoiceable
     *   - subtract_break
     *   - related_object_type
     *   - related_object_id
     */
    public function __construct($description, $start_date, $end_date, $worker_id, $task_type_id, array $options = [])
    {
        $this->options = $options;
        $this->setDescription($description);
        $this->setStartDate($start_date);
        $this->setEndDate($end_date);
        $this->setWorkerId($worker_id);
        $this->setTaskTypeId($task_type_id);
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->options['description'] = $description;
    }

    /**
     * @param $start_date
     */
    public function setStartDate($start_date)
    {
        $this->options['start_date'] = $start_date;
    }

    /**
     * @param $end_date
     */
    public function setEndDate($end_date)
    {
        $this->options['end_date'] = $end_date;
    }

    /**
     * @param $worker_id
     */
    public function setWorkerId($worker_id)
    {
        $this->options['worker_id'] = $worker_id;
    }

    /**
     * @param $task_type_id
     */
    public function setTaskTypeId($task_type_id)
    {
        $this->options['task_type_id'] = $task_type_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addTimetracking.php';
    }
}
