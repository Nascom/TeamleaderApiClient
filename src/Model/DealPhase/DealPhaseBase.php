<?php

namespace Nascom\TeamleaderApiClient\Model\DealPhase;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class DealPhaseBase
 *
 * @package Nascom\TeamleaderApiClient\Model\DealPhase
 */
abstract class DealPhaseBase extends ModelBase
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
