<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesDeleteRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesDeleteRequest extends PostRequest
{
    public function __construct($id)
    {
        $this->body['id'] = $id;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'companies.delete';
    }
}
