<?php

namespace Nascom\TeamleaderApiClient\Model\Milestone;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedUser;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedProject;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class MilestoneBase
 *
 * @package Nascom\TeamleaderApiClient\Model\Milestone
 */
abstract class MilestoneBase extends ModelBase
{
    /**
     * @var LinkedProject
     */
    private $project;

    /**
     * @var string
     */
    private $dueOn;

    /**
     * @var string
     */
    private $name;

    /**
     * @var LinkedUser
     */
    private $responsibleUser;

    /**
     * @var string
     */
    private $status;

    /**
     * @param LinkedProject $project
     * @param string $dueOn
     * @param string $name
     * @param LinkedUser $responsibleUser
     */
    public function create(
        LinkedProject $project,
        $dueOn,
        $name,
        LinkedUser $responsibleUser
    ) {
        $this->project = $project;
        $this->dueOn = $dueOn;
        $this->name = $name;
        $this->responsibleUser = $responsibleUser;
    }

    /**
     * @return LinkedProject
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param LinkedProject $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return string
     */
    public function getDueOn()
    {
        return $this->dueOn;
    }

    /**
     * @param string $dueOn
     */
    public function setDueOn($dueOn)
    {
        $this->dueOn = $dueOn;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return LinkedUser
     */
    public function getResponsibleUser()
    {
        return $this->responsibleUser;
    }

    /**
     * @param LinkedUser $responsibleUser
     */
    public function setResponsibleUser($responsibleUser)
    {
        $this->responsibleUser = $responsibleUser;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
