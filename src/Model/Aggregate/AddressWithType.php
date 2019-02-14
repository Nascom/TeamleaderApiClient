<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class AddressWithType
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class AddressWithType
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var Address
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
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}
