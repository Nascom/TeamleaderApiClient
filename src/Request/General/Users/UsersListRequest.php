<?php

namespace Nascom\TeamleaderApiClient\Request\General\Users;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class UsersListRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Users
 */
class UsersListRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'users.list';
    }
}
