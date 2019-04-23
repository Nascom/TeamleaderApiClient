<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\LevelTwoArea\LevelTwoAreaListView;
use Nascom\TeamleaderApiClient\Request\CRM\Addresses\LevelTwoAreasListRequest;

/**
 * Class LevelTwoAreaRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class LevelTwoAreaRepository extends RepositoryBase
{
    /**
     * @param string $country
     * @param string|null $language
     *
     * @return LevelTwoAreaListView[]
     * @throws \Http\Client\Exception
     */
    public function listLevelTwoAreas($country, $language = null)
    {
        $request = new LevelTwoAreasListRequest($country, $language);
        $request->setMethod('GET');

        return $this->handleRequest(
            $request,
            LevelTwoAreaListView::class . '[]'
        );
    }
}
