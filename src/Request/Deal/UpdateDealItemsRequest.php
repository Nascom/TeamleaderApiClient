<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class UpdateDealItemsRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class UpdateDealItemsRequest extends AbstractPostRequest
{
    /**
     * UpdateDealItemsRequest constructor.
     *
     * @param $deal_id
     * @param $items
     *   Array containing item parameters:
     *   - description_1
     *   - price_1
     *   - amount_1
     *   - vat_1
     *   - product_id_1
     *   - account_1
     *   - subtitle_1
     *
     *   - description_2
     *   - price_2
     *   - ...
     *   - custom_field_ID
     * @param array $options
     */
    public function __construct($deal_id, $items, array $options = [])
    {
        $this->options = $options;
        $this->setDealId($deal_id);
        $this->setItems($items);
    }

    /**
     * @param $deal_id
     */
    public function setDealId($deal_id)
    {
        $this->options['deal_id'] = $deal_id;
    }

    /**
     * @param $items
     */
    public function setItems($items)
    {
        foreach ($items as $key => $item) {
            $this->options[$key] = $item;
        }
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'updateDealItems.php';
    }
}
