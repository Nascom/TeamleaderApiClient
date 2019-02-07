<?php

namespace Nascom\TeamleaderApiClient\Model;

/**
 * Class RelationBase
 * @package Nascom\TeamleaderApiClient\Model
 */
abstract class RelationBase extends ModelBase
{
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
