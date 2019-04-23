<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\BusinessType\BusinessTypeListView;
use Nascom\TeamleaderApiClient\Request\CRM\BusinessTypes\BusinessTypesListRequest;

/**
 * Class BusinessTypeRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class BusinessTypeRepository extends RepositoryBase
{
    /**
     * @param string|null $country
     *
     * @return BusinessTypeListView[]
     * @throws \Http\Client\Exception
     */
    public function listBusinessTypes($country = null)
    {
        $request = new BusinessTypesListRequest($country);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            BusinessTypeListView::class . '[]'
        );
    }
}
