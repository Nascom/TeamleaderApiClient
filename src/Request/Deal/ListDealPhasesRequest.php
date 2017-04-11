<?php

namespace Nascom\TeamleaderApiClient\Request\Deal;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListDealPhasesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Deal
 */
class ListDealPhasesRequest extends AbstractPostRequest
{
    /**
     * ListDealPhasesRequest constructor.
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
        return 'getDealPhases.php';
    }
}
