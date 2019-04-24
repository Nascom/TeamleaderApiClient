<?php

namespace Nascom\TeamleaderApiClient\Request\CRM\Companies;

use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;
use Nascom\TeamleaderApiClient\Request\PostRequest;

/**
 * Class CompaniesDeleteRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\CRM\Companies
 */
class CompaniesDeleteRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * CompaniesDeleteRequest constructor.
     *
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
        return 'companies.delete';
    }
}
