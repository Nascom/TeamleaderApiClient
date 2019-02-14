<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class CompanyEmployee
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class CompanyEmployee
{
    /**
     * @var string
     */
    private $position;

    /**
     * @var boolean
     */
    private $decisionMaker;

    /**
     * @var LinkedDefinition
     */
    private $company;

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return bool
     */
    public function getDecisionMaker()
    {
        return $this->decisionMaker;
    }

    /**
     * @param bool $decisionMaker
     */
    public function setDecisionMaker($decisionMaker)
    {
        $this->decisionMaker = $decisionMaker;
    }

    /**
     * @return LinkedDefinition
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param LinkedDefinition $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }
}
