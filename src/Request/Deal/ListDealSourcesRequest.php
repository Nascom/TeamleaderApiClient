<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListDealSourcesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class ListDealSourcesRequest extends AbstractPostRequest
{
    /**
     * ListDealSourcesRequest constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getDealSources.php';
    }
}
