<?php

namespace Nascom\TeamleaderApiClient\Request\Ticket;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateTicketRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Ticket
 */
class CreateTicketRequest extends AbstractPostRequest
{
    /**
     * CreateTicketRequest constructor.
     *
     * @param $client_email
     * @param $client_name
     * @param $subject
     * @param $project_id
     * @param array $options
     *   Optional parameters:
     *   - contact_or_company
     *   - contact_or_company_id
     *   - optional_company_id
     *   - send_autoreply
     *   - description_html
     *   - responsible_sys_client_id
     *   - project_id
     */
    public function __construct($client_email, $client_name, $subject, $project_id, array $options = [])
    {
        $this->options = $options;
        $this->setClientEmail($client_email);
        $this->setClientName($client_name);
        $this->setSubject($subject);
        $this->setProjectId($project_id);
    }

    /**
     * @param $client_email
     */
    public function setClientEmail($client_email)
    {
        $this->options['client_email'] = $client_email;
    }

    /**
     * @param $client_name
     */
    public function setClientName($client_name)
    {
        $this->options['client_name'] = $client_name;
    }

    /**
     * @param $subject
     */
    public function setSubject($subject)
    {
        $this->options['subject'] = $subject;
    }

    /**
     * @param $project_id
     */
    public function setProjectId($project_id)
    {
        $this->options['project_id'] = $project_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addTicket.php';
    }
}
