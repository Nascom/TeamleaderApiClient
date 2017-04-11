<?php

namespace Nascom\TeamleaderApiClient\Request\Meeting;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class DeleteContactFromMeetingRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Meeting
 */
class DeleteContactFromMeetingRequest extends AbstractPostRequest
{
    /**
     * DeleteContactFromMeetingRequest constructor.
     *
     * @param $meeting_id
     * @param $contact_id
     * @param array $options
     */
    public function __construct($meeting_id, $contact_id, array $options = [])
    {
        $this->options = $options;
        $this->setMeetingId($meeting_id);
        $this->setContactId($contact_id);
    }

    /**
     * @param $meeting_id
     */
    public function setMeetingId($meeting_id)
    {
        $this->options['meeting_id'] = $meeting_id;
    }

    /**
     * @param $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->options['contact_id'] = $contact_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'removeContactFromMeeting.php';
    }
}
