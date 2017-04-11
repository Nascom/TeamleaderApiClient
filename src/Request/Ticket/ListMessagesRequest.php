<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListMessagesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class ListMessagesRequest extends AbstractPostRequest
{
    /**
     * ListMessagesRequest constructor.
     *
     * @param $ticket_id
     * @param $include_internal_message
     * @param $include_third_party_message
     * @param array $options
     */
    public function __construct($ticket_id, $include_internal_message, $include_third_party_message, array $options = [])
    {
        $this->options = $options;
        $this->setTicketId($ticket_id);
        $this->setIncludeInternalMessage($include_internal_message);
        $this->setIncludeThirdPartyMessage($include_third_party_message);
    }

    /**
     * @param $ticket_id
     */
    public function setTicketId($ticket_id)
    {
        $this->options['ticket_id'] = $ticket_id;
    }

    /**
     * @param $include_internal_message
     */
    public function setIncludeInternalMessage($include_internal_message)
    {
        $this->options['include_internal_message'] = $include_internal_message;
    }

    /**
     * @param $include_third_party_message
     */
    public function setIncludeThirdPartyMessage($include_third_party_message)
    {
        $this->options['include_third_party_message'] = $include_third_party_message;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTicketMessages.php';
    }
}
