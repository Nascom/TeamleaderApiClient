<?php

namespace Nascom\TeamleaderApiClient\Request\Timetracking;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListTimetrackingEntriesRelatedToTaskRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Timetracking
 */
class ListTimetrackingEntriesRelatedToTaskRequest extends AbstractPostRequest
{
    /**
     * ListTimetrackingEntriesRelatedToTaskRequest constructor.
     *
     * @param $task_id
     * @param array $options
     */
    public function __construct($task_id, array $options = [])
    {
        $this->options = $options;
        $this->setTaskId($task_id);
    }

    /**
     * @param $task_id
     */
    public function setTaskId($task_id)
    {
        $this->options['task_id'] = $task_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTimetrackingForTask.php';
    }
}
