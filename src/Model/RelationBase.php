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
     * RelationBase constructor.
     *
     * @param string|null $type
     * @param string|null $id
     */
    public function __construct($type = null, $id = null)
    {
        $this->type = $type;
        $this->setId($id);
    }

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
