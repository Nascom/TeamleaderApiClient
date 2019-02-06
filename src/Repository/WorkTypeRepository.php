<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\WorkTypes\WorkType;
use Nascom\TeamleaderApiClient\Request\General\WorkTypes\WorkTypesListRequest;

/**
 * Class WorkTypeRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WorkTypeRepository extends RepositoryBase
{
    /**
     * @return WorkType
     * @throws \Http\Client\Exception
     */
    public function listWorkTypes()
    {
        $request = new WorkTypesListRequest();

        return $this->handleRequest($request, WorkType::class.'[]');
    }
}
