<?php

namespace Nascom\TeamleaderApiClient\Request\Meeting;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveMeetingRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Meeting
 */
class RetrieveMeetingRequest extends AbstractPostRequest
{
    /**
     * RetrieveMeetingRequest constructor.
     *
     * @param $meeting_id
     * @param array $options
     */
    public function __construct($meeting_id, array $options = [])
    {
        $this->options = $options;
        $this->options['meeting_id'] = $meeting_id;
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
        return 'getMeeting.php';
    }
}
