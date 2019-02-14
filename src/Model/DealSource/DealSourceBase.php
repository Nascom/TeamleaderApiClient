<?php

namespace Nascom\TeamleaderApiClient\Model\DealSource;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class DealSourceBase
 *
 * @package Nascom\TeamleaderApiClient\Model\DealSource
 */
abstract class DealSourceBase extends ModelBase
{
    /**
     * @var string
     */
    private $name;

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
