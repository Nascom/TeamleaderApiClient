<?php

namespace Nascom\TeamleaderApiClient\Model\BusinessType;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class LinkedBusinessType
 *
 * @package Nascom\TeamleaderApiClient\Model\LinkedBusinessType
 */
abstract class BusinessTypeBase extends ModelBase
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $country;

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
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }


}
