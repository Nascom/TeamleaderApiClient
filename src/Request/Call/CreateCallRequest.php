<?php

namespace Nascom\TeamleaderApiClient\Request\Call;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateCallRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Call
 */
class CreateCallRequest extends AbstractPostRequest
{
    /**
     * CreateCallRequest constructor.
     *
     * @param $due_date
     * @param $hour
     * @param $user_id
     * @param $for
     * @param $for_id
     * @param $custom_field_ID
     * @param array $options
     *   Optional parameters:
     *   - description
     */
    public function __construct($due_date, $hour, $user_id, $for, $for_id, $custom_field_ID, array $options = [])
    {
        $this->options = $options;
        $this->setDueDate($due_date);
        $this->setHour($hour);
        $this->setUserId($user_id);
        $this->setFor($for);
        $this->setForId($for_id);
        $this->setCustomFieldID($custom_field_ID);
    }

    /**
     * @param $due_date
     */
    public function setDueDate($due_date)
    {
        $this->options['due_date'] = $due_date;
    }

    /**
     * @param $hour
     */
    public function setHour($hour)
    {
        $this->options['hour'] = $hour;
    }

    /**
     * @param $user_id
     */
    public function setUserId($user_id)
    {
        $this->options['user_id'] = $user_id;
    }

    /**
     * @param $for
     */
    public function setFor($for)
    {
        $this->options['for'] = $for;
    }

    /**
     * @param $for_id
     */
    public function setForId($for_id)
    {
        $this->options['for_id'] = $for_id;
    }

    /**
     * @param $custom_field_ID
     */
    public function setCustomFieldID($custom_field_ID)
    {
        $this->options['custom_field_ID'] = $custom_field_ID;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addCallback.php';
    }
}
