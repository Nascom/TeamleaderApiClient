<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\WorkTypes\WorkTypes;
use Nascom\TeamleaderApiClient\Request\General\WorkType\WorkTypesListRequest;

/**
 * Class WorkTypeRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WorkTypeRepository extends RepositoryBase
{
    /**
     * @return WorkTypes
     * @throws \Http\Client\Exception
     */
    public function listWorkTypes()
    {
        $request = new WorkTypesListRequest();

        return $this->handleRequest($request, WorkTypes::class.'[]');
    }
}
