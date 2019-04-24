<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesUntagRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesUntagRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesUntagRequest constructor.
     *
     * @param string $id
     * @param array $tags
     */
    public function __construct($id, array $tags)
    {
        $this->body['id'] = $id;
        $this->body['tags'] = $tags;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'companies.untag';
    }
}
