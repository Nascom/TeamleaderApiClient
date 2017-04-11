<?php

namespace Nascom\TeamleaderApiClient\Request\Miscellaneous;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateHourlyPricingRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Miscellaneous
 */
class UpdateHourlyPricingRequest extends AbstractPostRequest
{
    /**
     * UpdateHourlyPricingRequest constructor.
     *
     * @param $for
     * @param $for_id
     * @param $hourly_pricing
     * @param array $options
     *   Optional parameters:
     *   - update_existing_timetracking
     */
    public function __construct($for, $for_id, $hourly_pricing, array $options = [])
    {
        $this->options = $options;
        $this->setFor($for);
        $this->setForId($for_id);
        $this->setHourlyPricing($hourly_pricing);
    }

    /**
     * @param $for
     */
    public function setFor($for)
    {
        $this->options['for'] = $for;
    }

    /**
     * @param $for_id
     */
    public function setForId($for_id)
    {
        $this->options['for_id'] = $for_id;
    }

    /**
     * @param $hourly_pricing
     */
    public function setHourlyPricing($hourly_pricing)
    {
        $this->options['hourly_pricing'] = $hourly_pricing;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'setHourlyPricing.php';
    }
}
