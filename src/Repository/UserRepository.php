<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\User\User;
use Nascom\TeamleaderApiClient\Request\General\Users\UsersMeRequest;

/**
 * Class UserRepository
 *
 * @package Nascom\TeamleaderApiClient\Repository
 */
class UserRepository extends RepositoryBase
{
    /**
     * @return User
     * @throws \Http\Client\Exception
     */
    public function me()
    {
        $request = new UsersMeRequest();
        return $this->handleRequest($request, User::class);
    }
}
