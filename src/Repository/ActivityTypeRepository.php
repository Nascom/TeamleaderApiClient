<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\ActivityType\ActivityTypeListView;
use Nascom\TeamleaderApiClient\Request\Calendar\ActivityTypes\ActivityTypesListRequest;

/**
 * Class ActivityTypeRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class ActivityTypeRepository extends RepositoryBase
{
    /**
     * @param array $filters
     * @param array $page
     *
     * @return ActivityTypeListView[]
     * @throws \Http\Client\Exception
     */
    public function listActivityTypes(array $filters = [], array $page = [])
    {
        $request = new ActivityTypesListRequest();
        $request->setFilters($filters);
        $request->setPage($page);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            ActivityTypeListView::class . '[]'
        );
    }
}
