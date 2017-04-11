<?php

namespace Nascom\TeamleaderApiClient\Request\Task;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateTaskRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Task
 */
class CreateTaskRequest extends AbstractPostRequest
{
    /**
     * CreateTaskRequest constructor.
     *
     * @param $description
     * @param $due_date
     * @param null $user_id
     * @param null $team_id
     * @param $task_type_id
     * @param $duration
     * @param $priority
     * @param array $options
     *   Optional parameters:
     *   - for
     *   - for_id
     *   - creator_user_id
     *   - related_deal_id
     *   - related_ticket_id
     *   - custom_field_ID
     */
    public function __construct($description, $due_date, $user_id = null, $team_id = null, $task_type_id, $duration, $priority, array $options = [])
    {
        $this->options = $options;
        $this->setDescription($description);
        $this->setDueDate($due_date);
        $this->setUserIdOrTeamId($user_id, $team_id);
        $this->setTaskTypeId($task_type_id);
        $this->setDuration($duration);
        $this->setPriority($priority);
    }

    public function setDescription($description)
    {
        $this->options['description'] = $description;
    }

    public function setDueDate($due_date)
    {
        $this->options['due_date'] = $due_date;
    }

    public function setUserIdOrTeamId($user_id, $team_id)
    {
        if ($user_id !== null) {
            $this->options['user_id'] = $user_id;
        }
        else if ($team_id !== null) {
            $this->options['team_id'] = $team_id;
        }
    }

    public function setTaskTypeId($task_type_id)
    {
        $this->options['task_type_id'] = $task_type_id;
    }

    public function setDuration($duration)
    {
        $this->options['duration'] = $duration;
    }

    public function setPriority($priority)
    {
        $this->options['priority'] = $priority;
    }

    public function getUri()
    {
        return 'addTask.php';
    }
}
