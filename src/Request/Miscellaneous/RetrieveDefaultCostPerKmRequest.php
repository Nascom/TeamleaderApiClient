<?php

namespace Nascom\TeamleaderApiClient\Request\Miscellaneous;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class RetrieveDefaultCostPerKmRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Miscellaneous
 */
class RetrieveDefaultCostPerKmRequest extends AbstractPostRequest
{
    /**
     * RetrieveDefaultCostPerKmRequest constructor.
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
        return 'getCostPerKm.php';
    }
}
