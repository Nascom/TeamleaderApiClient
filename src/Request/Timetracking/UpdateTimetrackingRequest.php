<?php

namespace Nascom\TeamleaderApiClient\Request\Timetracking;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateTimetrackingRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Timetracking
 */
class UpdateTimetrackingRequest extends AbstractPostRequest
{
    /**
     * UpdateTimetrackingRequest constructor.
     *
     * @param $timetracking_id
     * @param array $options
     *   Optional parameters:
     *   - description
     *   - start_date
     *   - end_date
     *   - worker_id
     *   - task_type_id
     *   - for
     *   - for_id
     *   - invoiceable
     *   - subtract_break
     *   - related_object_type
     *   - related_object_id
     *
     *   Extra parameters for adding additional costs (optional):
     *   - description_1
     *   - price_1
     *   - amount_1
     *   - vat_1
     *   - product_id_1
     *   - subtitle_1
     *
     *   - description_2
     *   - price_2
     *   - ...
     */
    public function __construct($timetracking_id, array $options = [])
    {
        $this->options = $options;
        $this->setTimetrackingId($timetracking_id);
    }

    /**
     * @param $timetracking_id
     */
    public function setTimetrackingId($timetracking_id)
    {
        $this->options['timetracking_id'] = $timetracking_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'updateTimetracking.php';
    }
}
