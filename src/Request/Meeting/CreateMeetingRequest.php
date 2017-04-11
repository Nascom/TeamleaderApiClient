<?php

namespace Nascom\TeamleaderApiClient\Request\Meeting;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateMeetingRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Meeting
 */
class CreateMeetingRequest extends AbstractPostRequest
{
    /**
     * CreateMeetingRequest constructor.
     *
     * @param $start_date
     * @param $user_id
     * @param $title
     * @param $description
     * @param $duration
     * @param array $options
     *   Optional parameters:
     *   - milestone_id
     */
    public function __construct($start_date, $user_id, $title, $description, $duration, array $options = [])
    {
        $this->options = $options;
        $this->setStartDate($start_date);
        $this->setUserId($user_id);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setDuration($duration);
    }

    /**
     * @param $start_date
     */
    public function setStartDate($start_date)
    {
        $this->options['start_date'] = $start_date;
    }

    /**
     * @param $user_id
     */
    public function setUserId($user_id)
    {
        $this->options['user_id'] = $user_id;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->options['title'] = $title;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->options['description'] = $description;
    }

    /**
     * @param $duration
     */
    public function setDuration($duration)
    {
        $this->options['duration'] = $duration;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addMeeting.php';
    }
}
