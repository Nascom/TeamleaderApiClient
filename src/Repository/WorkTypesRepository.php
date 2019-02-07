<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\WorkType\WorkTypeListView;
use Nascom\TeamleaderApiClient\Request\General\WorkTypes\WorkTypesListRequest;

/**
 * Class WorkTypesRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WorkTypesRepository extends RepositoryBase
{
    /**
     * @return WorkTypeBase
     * @throws \Http\Client\Exception
     */
    public function listWorkTypes()
    {
        $request = new WorkTypesListRequest();

        return $this->handleRequest($request, WorkTypeListView::class.'[]');
    }
}
