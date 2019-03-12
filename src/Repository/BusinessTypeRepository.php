<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Entity\BusinessType;
use Nascom\TeamleaderApiClient\Exception\ApiException;
use Nascom\TeamleaderApiClient\Request\BusinessType\BusinessTypesListRequest;

class BusinessTypeRepository extends RepositoryBase
{

    /**
     * Gets a list of business types.
     * @see https://developer.teamleader.eu/#/reference/crm/business-types/businesstypes.list
     * @param $country
     * @throws ApiException
     * @return BusinessType[]
     */
    public function listBusinessTypes($country = null)
    {
        $request = new BusinessTypesListRequest();
        if ($country !== null) {
            $request->setCountry($country);
        }

        $response = $this->sendRequest($request);
        $responseBody = $this->getResponseBody($response);

        $businessTypes = [];
        if (!isset($responseBody['data'])) {
            throw new ApiException('Something went wrong while fetching the contacts');
        }
        foreach ($responseBody['data'] as $businessTypeItem) {
            $businessTypes[] = new BusinessType($businessTypeItem);
        }

        return $businessTypes;
    }

}
