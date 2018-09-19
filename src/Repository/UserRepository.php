<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\User;
use Nascom\TeamleaderApiClient\Request\General\Users\UsersMeRequest;

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
