<?php

namespace Nascom\TeamleaderApiClient\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedPhase;

/**
 * Class DealListView
 *
 * @package Nascom\TeamleaderApiClient\Model\Deal
 */
class DealListView extends DealBase
{
    /**
     * @var LinkedPhase
     */
    private $currentPhase;

    /**
     * @return LinkedPhase
     */
    public function getCurrentPhase()
    {
        return $this->currentPhase;
    }

    /**
     * @param LinkedPhase $currentPhase
     */
    public function setCurrentPhase($currentPhase)
    {
        $this->currentPhase = $currentPhase;
    }
}
