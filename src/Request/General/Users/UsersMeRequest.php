<?php

namespace Nascom\TeamleaderApiClient\Request\General\Users;

use Nascom\TeamleaderApiClient\Request\GetRequest;

/**
 * Class UsersMeRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Users
 */
class UsersMeRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'users.me';
    }
}
