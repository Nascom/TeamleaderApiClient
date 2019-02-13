<?php

namespace Nascom\TeamleaderApiClient\Model;

/**
 * Class ModelBase
 *
 * @package Nascom\TeamleaderApiClient\Model
 */
abstract class ModelBase
{
    /**
     * @var string
     */
    private $id;

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
