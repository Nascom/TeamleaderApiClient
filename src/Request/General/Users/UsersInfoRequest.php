<?php

namespace Nascom\TeamleaderApiClient\Request\General\Users;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class UsersInfoRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Users
 */
class UsersInfoRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * UsersInfoRequest constructor.
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
        return 'users.info';
    }
}
