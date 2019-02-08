<?php

namespace Nascom\TeamleaderApiClient\Model\ActivityType;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class ActivityTypeBase
 * @package Nascom\TeamleaderApiClient\Model\ActivityType
 */
abstract class ActivityTypeBase extends ModelBase
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
