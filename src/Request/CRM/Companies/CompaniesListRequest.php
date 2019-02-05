<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class CompaniesListRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesListRequest extends GetRequest
{
    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'companies.list';
    }
}
