<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveMessageRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class RetrieveMessageRequest extends AbstractPostRequest
{
    /**
     * RetrieveMessageRequest constructor.
     *
     * @param $message_id
     * @param array $options
     */
    public function __construct($message_id, array $options = [])
    {
        $this->options = $options;
        $this->setMessageId($message_id);
    }

    /**
     * @param $message_id
     */
    public function setMessageId($message_id)
    {
        $this->options['message_id'] = $message_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getTicketMessage.php';
    }
}
