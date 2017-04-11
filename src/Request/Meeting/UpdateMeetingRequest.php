<?php

namespace Nascom\TeamleaderApiClient\Request\Meeting;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateMeetingRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Meeting
 */
class UpdateMeetingRequest extends AbstractPostRequest
{
    /**
     * UpdateMeetingRequest constructor.
     *
     * @param $meeting_id
     * @param array $options
     *   Optional parameters:
     *   - title
     *   - start_date
     *   - duration_minutes
     */
    public function __construct($meeting_id, array $options = [])
    {
        $this->options = $options;
        $this->setMeetingId($meeting_id);
    }

    /**
     * @param $meeting_id
     */
    public function setMeetingId($meeting_id)
    {
        $this->options['meeting_id'] = $meeting_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'updateMeeting.php';
    }
}
