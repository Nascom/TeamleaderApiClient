<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class CompaniesInfoRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesInfoRequest extends GetRequest
{
    /**
     * CompaniesInfoRequest constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'companies.info';
    }
}
