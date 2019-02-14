<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\DealPhase\DealPhaseListView;
use Nascom\TeamleaderApiClient\Request\Deals\DealPhases\DealPhasesListRequest;

/**
 * Class DealPhaseRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class DealPhaseRepository extends RepositoryBase
{
    /**
     * @return DealPhaseListView[]
     * @throws \Http\Client\Exception
     */
    public function listDealPhases()
    {
        $request = new DealPhasesListRequest();

        return $this->handleRequest(
            $request,
            DealPhaseListView::class.'[]'
        );
    }
}
