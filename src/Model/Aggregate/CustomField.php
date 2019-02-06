<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class CustomField
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class CustomField
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $value;

    public function __construct($value, $id = null)
    {
        $this->id = $id;
        $this->value = $value;;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


}
