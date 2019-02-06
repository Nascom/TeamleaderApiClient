<?php

namespace Nascom\TeamleaderApiClient\Model\Deal;

use Nascom\TeamleaderApiClient\Model\Aggregate\Phase;

/**
 * Class DealListView
 * @package Nascom\TeamleaderApiClient\Model\Deal
 */
class DealListView extends DealBase
{
    /**
     * @var Phase
     */
    private $currentPhase = [];

    /**
     * @return Phase
     */
    public function getCurrentPhase()
    {
        return $this->currentPhase;
    }

    /**
     * @param Phase $currentPhase
     */
    public function setCurrentPhase($currentPhase)
    {
        $this->currentPhase = $currentPhase;
    }
}
