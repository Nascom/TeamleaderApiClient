<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class AddMessageToTicketRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class AddMessageToTicketRequest extends AbstractPostRequest
{
    /**
     * AddMessageToTicketRequest constructor.
     *
     * @param $ticket_id
     * @param $message
     * @param array $options
     *   Optional parameters:
     *   - new_ticket_status
     *   - from
     *   - internal_note
     *   - announce_reply
     *   - send_email
     *
     *   Optional attachments:
     *   - attachment_X_body_base64
     *   - attachment_X_filename
     */
    public function __construct($ticket_id, $message, array $options = [])
    {
        $this->options = $options;
        $this->setTicketId($ticket_id);
        $this->setMessage($message);
    }

    /**
     * @param $ticket_id
     */
    public function setTicketId($ticket_id)
    {
        $this->options['ticket_id'] = $ticket_id;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->options['message'] = $message;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addTicketMessage.php';
    }
}
