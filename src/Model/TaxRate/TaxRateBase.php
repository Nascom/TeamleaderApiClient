<?php

namespace Nascom\TeamleaderApiClient\Model\TaxRate;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDepartment;
use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class TaxRateBase
 * @package Nascom\TeamleaderApiClient\Model\TaxRate
 */
abstract class TaxRateBase extends ModelBase
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $rate;

    /**
     * @var LinkedDepartment
     */
    private $department;

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
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

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
}
