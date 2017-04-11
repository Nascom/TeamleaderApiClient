<?php

namespace Nascom\TeamleaderApiClient\Request\Task;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveTaskRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Task
 */
class RetrieveTaskRequest extends AbstractPostRequest
{
    /**
     * RetrieveTaskRequest constructor.
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
        return 'getTask.php';
    }
}
