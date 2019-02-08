<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\DealPhase\DealPhaseListView;
use Nascom\TeamleaderApiClient\Request\Deals\DealPhases\DealPhasesListRequest;

/**
 * Class DealPhaseRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class DealPhaseRepository extends RepositoryBase
{
    /**
     * @return DealPhaseListView
     * @throws \Http\Client\Exception
     */
    public function listDealPhases() {
        return $this->handleRequest(
            new DealPhasesListRequest(),
            DealPhaseListView::class.'[]'
        );
    }
}
