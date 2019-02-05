<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class BusinessType
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class BusinessType
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $id;

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


}
