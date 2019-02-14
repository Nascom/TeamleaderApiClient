<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedDeal;
use Nascom\TeamleaderApiClient\Model\Deal\Deal;
use Nascom\TeamleaderApiClient\Model\Deal\DealListView;
use Nascom\TeamleaderApiClient\Model\LostReason\LostReasonListView;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsCreateRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsDeleteRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsInfoRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsListRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsLoseRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsMoveRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsUpdateRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\DealsWinRequest;
use Nascom\TeamleaderApiClient\Request\Deals\Deals\LostReasonsListRequest;

/**
 * Class DealRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class DealRepository extends RepositoryBase
{
    /**
     * @return DealListView[]
     * @throws \Http\Client\Exception
     */
    public function listDeals()
    {
        $request = new DealsListRequest();

        return $this->handleRequest(
            $request,
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
        $request = new DealsInfoRequest($id);

        return $this->handleRequest(
            $request,
            Deal::class
        );
    }

    /**
     * @param Deal $deal
     * @return LinkedDeal
     * @throws \Http\Client\Exception
     */
    public function addDeal(Deal $deal)
    {
        $request = new DealsCreateRequest($this->normalize($deal));

        return $this->handleRequest(
            $request,
            LinkedDeal::class
        );
    }

    /**
     * @param Deal $deal
     * @throws \Http\Client\Exception
     */
    public function updateDeal(Deal $deal)
    {
        $request = new DealsUpdateRequest($this->normalize($deal));

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param string $phaseId
     * @throws \Http\Client\Exception
     */
    public function moveDeal($id, $phaseId)
    {
        $request = new DealsMoveRequest($id, $phaseId);

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function winDeal($id)
    {
        $request = new DealsWinRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @param string|null $reasonId
     * @param string|null $extraInfo
     * @throws \Http\Client\Exception
     */
    public function loseDeal($id, $reasonId = null, $extraInfo = null)
    {
        $request = new DealsLoseRequest($id, $reasonId, $extraInfo);

        $this->apiClient->handle($request);
    }

    /**
     * @param string $id
     * @throws \Http\Client\Exception
     */
    public function deleteDeal($id)
    {
        $request = new DealsDeleteRequest($id);

        $this->apiClient->handle($request);
    }

    /**
     * @return LostReasonListView[]
     * @throws \Http\Client\Exception
     */
    public function listLostReasons()
    {
        $request = new LostReasonsListRequest();

        return $this->handleRequest(
            $request,
            LostReasonListView::class.'[]'
        );
    }
}
