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
     * @return ActivityTypeListView[]
     * @throws \Http\Client\Exception
     */
    public function listActivityTypes() {
        $request = new ActivityTypesListRequest();

        return $this->handleRequest(
            $request,
            ActivityTypeListView::class.'[]'
        );
    }
}
