<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateTicketRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class UpdateTicketRequest extends AbstractPostRequest
{
    /**
     * UpdateTicketRequest constructor.
     *
     * @param $ticket_id
     * @param array $options
     *   Optional parameters:
     *   - status
     *   - contact_or_company
     *   - contact_or_company_id
     *   - responsible_sys_client_id
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
        return 'updateTicket.php';
    }
}
