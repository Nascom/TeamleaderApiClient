<?php

namespace Nascom\TeamleaderApiClient\Request\Company;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListBusinessTypesRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Company
 */
class ListBusinessTypesRequest extends AbstractPostRequest
{
    /**
     * ListBusinessTypesRequest constructor.
     *
     * @param $country
     * @param array $options
     */
    public function __construct($country, array $options = [])
    {
        $this->options = $options;
        $this->setCountry($country);
    }

    /**
     * @param $country
     */
    public function setCountry($country)
    {
        $this->options['country'] = $country;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getBusinessTypes.php';
    }
}
