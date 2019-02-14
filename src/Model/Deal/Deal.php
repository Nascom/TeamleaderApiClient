<?php

namespace Nascom\TeamleaderApiClient\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedCustomField;
use Nascom\TeamleaderApiClient\Model\Aggregate\PhaseHistory;
use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedQuotation;

/**
 * Class Deal
 *
 * @package Nascom\TeamleaderApiClient\Model\Deal
 */
class Deal extends DealBase
{
    /**
     * @var PhaseHistory[]
     */
    private $phaseHistory;

    /**
     * @var LinkedQuotation[]
     */
    private $quotations;

    /**
     * @var LinkedCustomField[]
     */
    private $customFields;

    /**
     * @return PhaseHistory[]
     */
    public function getPhaseHistory()
    {
        return $this->phaseHistory;
    }

    /**
     * @param PhaseHistory[] $phaseHistory
     */
    public function setPhaseHistory($phaseHistory)
    {
        $this->phaseHistory = $phaseHistory;
    }

    /**
     * @return LinkedQuotation[]
     */
    public function getQuotations()
    {
        return $this->quotations;
    }

    /**
     * @param LinkedQuotation[] $quotations
     */
    public function setQuotations($quotations)
    {
        $this->quotations = $quotations;
    }

    /**
     * @return LinkedCustomField[]
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param LinkedCustomField[] $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
    }
}
