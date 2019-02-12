<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Ledger
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Ledger
{
    /**
     * @var LinkedDepartment
     */
    private $department;

    /**
     * @var string
     */
    private $ledgerAccountNumber;

    /**
     * @return LinkedDepartment
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param LinkedDepartment $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getLedgerAccountNumber()
    {
        return $this->ledgerAccountNumber;
    }

    /**
     * @param string $ledgerAccountNumber
     */
    public function setLedgerAccountNumber($ledgerAccountNumber)
    {
        $this->ledgerAccountNumber = $ledgerAccountNumber;
    }
}
