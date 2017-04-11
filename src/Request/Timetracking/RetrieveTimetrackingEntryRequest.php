<?php

namespace Nascom\TeamleaderApiClient\Request\Timetracking;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveTimetrackingEntryRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Timetracking
 */
class RetrieveTimetrackingEntryRequest extends AbstractPostRequest
{
    /**
     * RetrieveTimetrackingEntryRequest constructor.
     *
     * @param $timetracking_id
     * @param array $options
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
        return 'getTimetrackingEntry.php';
    }
}
