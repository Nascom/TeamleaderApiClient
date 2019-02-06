<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Phase
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Phase
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}
