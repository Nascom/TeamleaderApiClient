<?php

namespace Nascom\TeamleaderApiClient\Request\Milestone;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListMilestonesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Milestone
 */
class ListMilestonesRequest extends AbstractPostRequest
{
    /**
     * ListMilestonesRequest constructor.
     *
     * @param $project_id
     * @param array $options
     *   Optional parameters:
     *   - include_details
     *   - include_custom_fields_milestones
     */
    public function __construct($project_id, array $options = [])
    {
        $this->options = $options;
        $this->setProjectId($project_id);
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
        return 'getMilestonesByProject.php';
    }
}
