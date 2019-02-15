<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\WorkType\WorkTypeListView;
use Nascom\TeamleaderApiClient\Request\General\WorkTypes\WorkTypesListRequest;

/**
 * Class WorkTypeRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WorkTypeRepository extends RepositoryBase
{
    /**
     * @param array $filters
     * @param array $page
     * @param array $sort
     * @return WorkTypeListView[]
     * @throws \Http\Client\Exception
     */
    public function listWorkTypes(array $filters = [], array $page = [], array $sort = [])
    {
        $request = new WorkTypesListRequest();
        $request->setFilters($filters);
        $request->setSort($sort);
        $request->setPage($page);

        return $this->handleRequest(
            $request,
            WorkTypeListView::class.'[]'
        );
    }
}
