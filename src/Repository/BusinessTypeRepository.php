<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\BusinessType\BusinessTypeListView;
use Nascom\TeamleaderApiClient\Request\CRM\BusinessTypes\BusinessTypesListRequest;

/**
 * Class BusinessTypeRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class BusinessTypeRepository extends RepositoryBase
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function listBusinessTypes()
    {
        $request = new BusinessTypesListRequest();

        return $this->handleRequest($request, BusinessTypeListView::class.'[]');
    }
}
