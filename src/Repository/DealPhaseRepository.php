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
     * @param array $filters
     * @param array $page
     * @return DealPhaseListView[]
     * @throws \Http\Client\Exception
     */
    public function listDealPhases(array $filters = [], array $page = [])
    {
        $request = new DealPhasesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            DealPhaseListView::class.'[]'
        );
    }
}
