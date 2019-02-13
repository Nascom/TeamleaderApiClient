<?php

namespace Nascom\TeamleaderApiClient\Model\Department;

use Nascom\TeamleaderApiClient\Model\Aggregate\Address;
use Nascom\TeamleaderApiClient\Model\Aggregate\Email;
use Nascom\TeamleaderApiClient\Model\Aggregate\Telephone;

/**
 * Class Department
 *
 * @package Nascom\TeamleaderApiClient\Request\Department
 */
class Department extends DepartmentBase
{
    /**
     * @var Email[]
     */
    private $emails;

    /**
     * @var Telephone[]
     */
    private $telephones;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $bic;

    /**
     * @var string
     */
    private $fiscalRegime;

    /**
     * @var Address
     */
    private $address;

    /**
     * @return Email[]
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param Email[] $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    /**
     * @return Telephone[]
     */
    public function getTelephones()
    {
        return $this->telephones;
    }

    /**
     * @param Telephone[] $telephones
     */
    public function setTelephones($telephones)
    {
        $this->telephones = $telephones;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    /**
     * @return string
     */
    public function getFiscalRegime()
    {
        return $this->fiscalRegime;
    }

    /**
     * @param string $fiscalRegime
     */
    public function setFiscalRegime($fiscalRegime)
    {
        $this->fiscalRegime = $fiscalRegime;
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
