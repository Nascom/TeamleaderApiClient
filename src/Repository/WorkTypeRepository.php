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
     * @return WorkTypeListView[]
     * @throws \Http\Client\Exception
     */
    public function listWorkTypes()
    {
        $request = new WorkTypesListRequest();

        return $this->handleRequest(
            $request,
            WorkTypeListView::class.'[]'
        );
    }
}
