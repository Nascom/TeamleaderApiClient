<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Addresses
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Addresses
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var AddressWithAddressee
     */
    private $address;

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
     * @return AddressWithAddressee
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressWithAddressee $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}
