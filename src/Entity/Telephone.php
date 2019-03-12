<?php
namespace Nascom\TeamleaderApiClient\Entity;

/**
 * Class Telephone
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class Telephone extends Entity
{
    /**
     * @return string
     */
    public function getType()
    {
        return $this->getEntityValue('type', '');
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->setEntityValue('type', $type);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->getEntityValue('number', '');
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->setEntityValue('number', $number);
    }
}