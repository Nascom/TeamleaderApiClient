<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateDealInformationRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class UpdateDealInformationRequest extends AbstractPostRequest
{
    /**
     * UpdateDealInformationRequest constructor.
     *
     * @param $deal_id
     * @param array $options
     *   Optional parameters:
     *   - title
     *   - source
     *   - responsible_sys_client_id
     *   - phase_id
     *   - budget_estimation
     *   - custom_field_ID
     */
    public function __construct($deal_id, array $options = [])
    {
        $this->options = $options;
        $this->setDealId($deal_id);
    }

    /**
     * @param $deal_id
     */
    public function setDealId($deal_id)
    {
        $this->options['deal_id'] = $deal_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'updateDeal.php';
    }
}
