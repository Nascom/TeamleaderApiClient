<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class InvoiceeExtended
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class InvoiceeExtended extends InvoiceeBase
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $NationalIdentificationNumber;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getNationalIdentificationNumber()
    {
        return $this->NationalIdentificationNumber;
    }

    /**
     * @param string $NationalIdentificationNumber
     */
    public function setNationalIdentificationNumber($NationalIdentificationNumber)
    {
        $this->NationalIdentificationNumber = $NationalIdentificationNumber;
    }
}
