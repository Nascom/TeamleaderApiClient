<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\DealSource\DealSourceListView;
use Nascom\TeamleaderApiClient\Request\Deals\DealSources\DealSourcesListRequest;

/**
 * Class DealSourceRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class DealSourceRepository extends RepositoryBase
{
    public function listDealSources() {
        return $this->handleRequest(
            new DealSourcesListRequest(),
            DealSourceListView::class.'[]'
        );
    }
}
