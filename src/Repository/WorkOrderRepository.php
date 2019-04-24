<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\Aggregate\LinkedWorkOrder;
use Nascom\TeamleaderApiClient\Model\WorkOrder\WorkOrder;
use Nascom\TeamleaderApiClient\Request\WorkOrders\WorkOrders\WorkOrdersDraftRequest;

/**
 * Class WorkOrderRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class WorkOrderRepository extends RepositoryBase
{
    /**
     * @param WorkOrder $workOrder
     *
     * @return LinkedWorkOrder
     * @throws \Http\Client\Exception
     */
    public function draftWorkOrder(WorkOrder $workOrder)
    {
        $request = new WorkOrdersDraftRequest($this->normalize($workOrder));

        return $this->handleRequest(
            $request,
            LinkedWorkOrder::class
        );
    }
}
