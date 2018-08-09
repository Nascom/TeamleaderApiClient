<?php
namespace Nascom\TeamleaderApiClient\Entity;

/**
 * Class PaymentTerm
 *
 * @package Nascom\TeamleaderApiClient\Attributes
 */
class Address extends Entity
{
    /**
     * @return string
     */
    public function getAddressee()
    {
        return $this->getEntityValue('addressee', '');
    }

    /**
     * @param string $addressee
     */
    public function setAddressee($addressee)
    {
        $this->setEntityValue('addressee', $addressee);
    }

    /**
     * @return string
     */
    public function getLine1()
    {
        return $this->getEntityValue('line_1', '');
    }

    /**
     * @param string $line1
     */
    public function setLine1($line1)
    {
        $this->setEntityValue('line_1', $line1);
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->getEntityValue('postal_code', '');
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->setEntityValue('postal_code', $postalCode);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getEntityValue('city', '');
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->setEntityValue('city', $city);
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
        $this->setEntityValue('country', $country);
    }
}
