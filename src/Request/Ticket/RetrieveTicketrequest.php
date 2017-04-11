<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveTicketrequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class RetrieveTicketrequest extends AbstractPostRequest
{
    /**
     * RetrieveTicketrequest constructor.
     *
     * @param $ticket_id
     * @param array $options
     *   Optional parameters:
     *   - return_detailed_timetracking
     */
    public function __construct($ticket_id, array $options = [])
    {
        $this->options = $options;
        $this->setTicketId($ticket_id);
    }

    /**
     * @param $ticket_id
     */
    public function setTicketId($ticket_id)
    {
        $this->options['ticket_id'] = $ticket_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTicket.php';
    }
}
