<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class AddressWithAddressee
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class AddressWithAddressee extends Address
{
    /**
     * @var string
     */
    private $addressee;

    /**
     * @return string
     */
    public function getAddressee()
    {
        return $this->addressee;
    }

    /**
     * @param string $addressee
     */
    public function setAddressee($addressee)
    {
        $this->addressee = $addressee;
    }
}
