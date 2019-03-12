<?php
namespace Nascom\TeamleaderApiClient\Entity;

use Nascom\TeamleaderApiClient\Entity\Entity;

/**
 * Class BusinessType
 *
 * @package Nascom\TeamleaderApiClient\Entity
 */
class BusinessType extends Entity
{
    /**
     * @return string
     */
    public function getId()
    {
        return $this->getEntityValue('id', '');
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->setEntityValue('id', $id);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getEntityValue('name', '');
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->setEntityValue('name', $name);
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->getEntityValue('country', '');
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->setCountry('country', $country);
    }

}
