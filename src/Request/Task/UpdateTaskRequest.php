<?php

namespace Nascom\TeamleaderApiClient\Request\Task;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateTaskRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Task
 */
class UpdateTaskRequest extends AbstractPostRequest
{
    /**
     * UpdateTaskRequest constructor.
     *
     * @param $task_id
     * @param array $options
     *   Optional parameters:
     *   - description
     *   - duration
     *   - task_type_id
     *   - user_id
     *   - priority
     *   - done
     *   - custom_field_ID
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
        return 'updateTask.php';
    }
}
