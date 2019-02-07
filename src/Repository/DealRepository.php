<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Deal\Deal;
use Nascom\TeamleaderApiClient\Model\Deal\DealListView;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsCreateRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsListRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsUpdateRequest;
use spec\PhpSpec\CodeAnalysis\MagicAwareAccessInspectorSpec;

/**
 * Class DealRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class DealRepository extends RepositoryBase
{
    /**
     * @return DealListView
     * @throws \Http\Client\Exception
     */
    public function listDeals()
    {
        return $this->handleRequest(
            new DealsListRequest(),
            DealListView::class.'[]'
        );
    }

    /**
     * @param string $id
     * @return Deal
     * @throws \Http\Client\Exception
     */
    public function getDeal($id)
    {
        return $this->handleRequest(
            new DealsInfoRequest($id),
            Deal::class
        );
    }

    /**
     * @param Deal $deal
     * @throws \Http\Client\Exception
     */
    public function addDeal(Deal $deal)
    {
        $dealArray = $this->normalize($deal);

        $this->apiClient->handle(new DealsCreateRequest($dealArray));
    }

    /**
     * @param Deal $deal
     * @throws \Http\Client\Exception
     */
    public function updateDeal(Deal $deal)
    {
        $dealArray = $this->normalize($deal);

        $this->apiClient->handle(new DealsUpdateRequest($dealArray));
    }
}
