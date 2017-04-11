<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListTicketsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class ListTicketsRequest extends AbstractPostRequest
{
    /**
     * ListTicketsRequest constructor.
     *
     * @param $type
     * @param array $options
     *   Optional parameters:
     *   - contact_or_company
     *   - contact_or_company_id
     *   - deep_search
     *   - project_id
     */
    public function __construct($type, array $options = [])
    {
        $this->options = $options;
        $this->setType($type);
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->options['type'] = $type;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTickets.php';
    }
}
