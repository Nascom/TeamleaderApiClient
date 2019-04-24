<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Address
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Address
{
//    /**
//     * Seems unsupported by teamleader
//     *
//     * @var string
//     */
//    private $addressee;

    /**
     * @var string
     */
    private $line1;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @return string
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
     * @return string
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
     * @return string
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
     * @return string
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

//    /**
//     * @return string
//     */
//    public function getAddressee()
//    {
//        return $this->addressee;
//    }

//    /**
//     * @param string $addressee
//     */
//    public function setAddressee($addressee)
//    {
//        $this->addressee = $addressee;
//    }
}
