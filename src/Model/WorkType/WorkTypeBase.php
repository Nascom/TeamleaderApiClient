<?php

namespace Nascom\TeamleaderApiClient\Model\WorkType;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class WorkType
 * @package Nascom\TeamleaderApiClient\Model\WorkType
 */
class WorkTypeBase extends ModelBase
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
