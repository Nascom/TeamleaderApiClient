<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Address
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Address
{
    /**
     * @var string
     * TODO Seems unsupported by teamleader
     */
//    private $addressee;

    /**
     * @var string|null
     */
    private $line1;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @return null|string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * @param string $line1
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;
    }

    /**
     * @return null|string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
//    public function getAddressee()
//    {
//        return $this->addressee;
//    }

    /**
     * @param string $addressee
     */
//    public function setAddressee($addressee)
//    {
//        $this->addressee = $addressee;
//    }
}
