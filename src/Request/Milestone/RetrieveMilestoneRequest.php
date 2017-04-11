<?php

namespace Nascom\TeamleaderApiClient\Request\Milestone;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveMilestoneRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Milestone
 */
class RetrieveMilestoneRequest extends AbstractPostRequest
{
    /**
     * RetrieveMilestoneRequest constructor.
     *
     * @param $milestone_id
     * @param array $options
     */
    public function __construct($milestone_id, array $options = [])
    {
        $this->options = $options;
        $this->setMilestoneId($milestone_id);
    }

    /**
     * @param $milestone_id
     */
    public function setMilestoneId($milestone_id)
    {
        $this->options['milestone_id'] = $milestone_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getMilestone.php';
    }
}
