<?php

namespace Nascom\TeamleaderApiClient\Model\LostReason;

use Nascom\TeamleaderApiClient\Model\ModelBase;

/**
 * Class LostReasonBase
 *
 * @package Nascom\TeamleaderApiClient\Model\LostReason
 */
abstract class LostReasonBase extends ModelBase
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
