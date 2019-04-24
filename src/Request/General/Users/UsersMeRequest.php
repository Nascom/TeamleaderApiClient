<?php

namespace Nascom\TeamleaderApiClient\Request\General\Users;

use Nascom\TeamleaderApiClient\Request\GetRequest;
use Nascom\TeamleaderApiClient\Request\MultipleMethodsTrait;

/**
 * Class UsersMeRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\General\Users
 */
class UsersMeRequest extends GetRequest
{
    use MultipleMethodsTrait;

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return 'users.me';
    }
}
