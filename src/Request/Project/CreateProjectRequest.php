<?php

namespace Nascom\TeamleaderApiClient\Request\Project;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class CreateProjectRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Project
 */
class CreateProjectRequest extends AbstractPostRequest
{
    /**
     * CreateProjectRequest constructor.
     *
     * @param $project_name
     * @param $project_budget
     * @param $project_responsible_user_id
     * @param $project_start_date
     * @param $milestone_title
     * @param array $options
     *   Optional parameters:
     *   - milestone_billing_type
     *   - contact_or_company
     *   - contact_or_company_id
     *   - external_order_number
     *   - custom_field_ID
     */
    public function __construct($project_name, $project_budget, $project_responsible_user_id, $project_start_date, $milestone_title, array $options = [])
    {
        $this->options = $options;
        $this->setProjectName($project_name);
        $this->setProjectBudget($project_budget);
        $this->setProjectResponsibleUserId($project_responsible_user_id);
        $this->setProjectStartDate($project_start_date);
        $this->setMilestoneTitle($milestone_title);
    }

    /**
     * @param $project_name
     */
    public function setProjectName($project_name)
    {
        $this->options['project_name'] = $project_name;
    }

    /**
     * @param $project_budget
     */
    public function setProjectBudget($project_budget)
    {
        $this->options['project_budget'] = $project_budget;
    }

    /**
     * @param $project_responsible_user_id
     */
    public function setProjectResponsibleUserId($project_responsible_user_id)
    {
        $this->options['project_responsible_user_id'] = $project_responsible_user_id;
    }

    /**
     * @param $project_start_date
     */
    public function setProjectStartDate($project_start_date)
    {
        $this->options['project_start_date'] = $project_start_date;
    }

    /**
     * @param $milestone_title
     */
    public function setMilestoneTitle($milestone_title)
    {
        $this->options['milestone_title'] = $milestone_title;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'addProject.php';
    }
}
