<?php

namespace Nascom\TeamleaderApiClient\Request\WorkOrders\WorkOrders;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class WorkOrdersDraftRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\WorkOrders\WorkOrders
 */
class WorkOrdersDraftRequest extends PostRequest
{
    /**
     * WorkOrdersDraftRequest constructor.
     *
     * @param array $workOrder
     */
    public function __construct(array $workOrder)
    {
        $this->body = $workOrder;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'workOrders.draft';
    }
}
