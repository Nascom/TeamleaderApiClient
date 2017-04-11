<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveTicketURLRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class RetrieveTicketURLRequest extends AbstractPostRequest
{
    /**
     * RetrieveTicketURLRequest constructor.
     *
     * @param $ticket_id
     * @param array $options
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
        return 'getTicketCloudURL.php';
    }
}
