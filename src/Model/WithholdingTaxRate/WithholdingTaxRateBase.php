<?php

namespace Nascom\TeamleaderApiClient\Model\WithholdingTaxRate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class WithholdingTaxRateBase
 *
 * @package Nascom\TeamleaderApiClient\Model\WithholdingTaxRate
 */
class WithholdingTaxRateBase extends ModelBase
{
    /**
     * @var LinkedDepartment
     */
    private $department;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $rate;

    /**
     * @return LinkedDepartment
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param LinkedDepartment $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}
