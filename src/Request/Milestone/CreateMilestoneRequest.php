<?php

namespace Nascom\TeamleaderApiClient\Request\Milestone;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateMilestoneRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Milestone
 */
class CreateMilestoneRequest extends AbstractPostRequest
{
    /**
     * CreateMilestoneRequest constructor.
     *
     * @param $project_id
     * @param $title
     * @param $budget
     * @param $invoiceable
     * @param $due_date
     * @param $responsible_crm_client_id
     * @param $billing_type
     * @param array $options
     *   Optional parameters:
     *   - critical_path
     */
    public function __construct($project_id, $title, $budget, $invoiceable, $due_date, $responsible_crm_client_id, $billing_type, array $options = [])
    {
        $this->options = $options;
        $this->setProjectId($project_id);
        $this->setTitle($title);
        $this->setBudget($budget);
        $this->setInvoiceable($invoiceable);
        $this->setDueDate($due_date);
        $this->setResponsibleCrmClientId($responsible_crm_client_id);
        $this->setBillingType($billing_type);
    }

    /**
     * @param $project_id
     */
    public function setProjectId($project_id)
    {
        $this->options['project_id'] = $project_id;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->options['title'] = $title;
    }

    /**
     * @param $budget
     */
    public function setBudget($budget)
    {
        $this->options['budget'] = $budget;
    }

    /**
     * @param $invoiceable
     */
    public function setInvoiceable($invoiceable)
    {
        $this->options['invoiceable'] = $invoiceable;
    }

    /**
     * @param $due_date
     */
    public function setDueDate($due_date)
    {
        $this->options['due_date'] = $due_date;
    }

    /**
     * @param $responsible_crm_client_id
     */
    public function setResponsibleCrmClientId($responsible_crm_client_id)
    {
        $this->options['responsible_crm_client_id'] = $responsible_crm_client_id;
    }

    /**
     * @param $billing_type
     */
    public function setBillingType($billing_type)
    {
        $this->options['billing_type'] = $billing_type;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addMilestone.php';
    }
}
