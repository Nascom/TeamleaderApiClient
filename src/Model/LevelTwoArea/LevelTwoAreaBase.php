<?php

namespace Nascom\TeamleaderApiClient\Model\LevelTwoArea;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class LevelTwoAreaBase
 *
 * @package Nascom\TeamleaderApiClient\Model\LevelTwoArea
 */
abstract class LevelTwoAreaBase extends ModelBase
{
    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $name;

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
}
