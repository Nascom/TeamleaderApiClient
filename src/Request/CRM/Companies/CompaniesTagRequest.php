<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesTagRequest
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesTagRequest extends PostRequest
{
    /**
     * CompaniesTagRequest constructor.
     * @param string $id
     * @param array $tags
     */
    public function __construct($id, array $tags)
    {
        $this->body['id'] = $id;
        $this->body['tags'] = $tags;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return 'companies.tag';
    }
}
