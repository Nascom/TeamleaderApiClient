<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Deal\Deal;
use Nascom\TeamleaderApiClient\Model\Deal\DealListView;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsCreateRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsDeleteRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsListRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsLoseRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsMoveRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsUpdateRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsWinRequest;
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

    /**
     * @param string $id
     * @param string $phaseId
     * @throws \Http\Client\Exception
     */
    public function moveDeal($id, $phaseId)
    {
        $this->apiClient->handle(new DealsMoveRequest($id, $phaseId));
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function winDeal($id)
    {
        $this->apiClient->handle(new DealsWinRequest($id));
    }

    /**
     * @param string $id
     * @param string|null $reasonId
     * @param string|null $extraInfo
     * @throws \Http\Client\Exception
     */
    public function loseDeal($id, $reasonId = null, $extraInfo = null)
    {
        $this->apiClient->handle(new DealsLoseRequest($id, $reasonId, $extraInfo));
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function deleteDeal($id) {
        $this->apiClient->handle(new DealsDeleteRequest($id));
    }
}
