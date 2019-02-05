<?php

namespace Nascom\TeamleaderApiClient\Model\Company;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;

/**
 * Class CompanyListView
 * @package Nascom\TeamleaderApiClient\Model\Company
 */
class CompanyListView extends CompanyBase
{
    /**
     * @var Address
     */
    private $primaryAddress = [];

    /**
     * @return Address
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * @param Address $primaryAddress
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->primaryAddress = $primaryAddress;
    }


}
